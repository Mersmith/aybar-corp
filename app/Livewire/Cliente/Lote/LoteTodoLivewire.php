<?php

namespace App\Livewire\Cliente\Lote;

use App\Services\SlinService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LoteTodoLivewire extends Component
{
    public $cliente_encontrado = null;

    public $razones_sociales = [];
    public $razon_social_id = "";
    public $razon_social_select;

    public $lotes = null;
    public $lote_select = null;

    public $cronograma = [];

    public function mount(SlinService $slinService)
    {
        $dni = Auth::user()->cliente->dni;

        $cliente = app()->environment('local')
        ? Http::get("https://aybarcorp.com/api/slin/cliente/{$dni}")->json()
        : $slinService->getClientePorDni($dni);

        if (empty($cliente)) {
            session()->flash('error', 'Inténtelo más tarde, por favor.');
            return;
        }

        $this->cliente_encontrado = $cliente;
        $this->razones_sociales = $cliente['empresas'] ?? [];
    }

    public function updatedRazonSocialId($value, SlinService $slinService)
    {
        if (empty($value)) {
            $this->razon_social_select = null;
            $this->lotes = null;
            return;
        }

        $this->razon_social_select = collect($this->razones_sociales)
            ->firstWhere('id_empresa', $value);

        if (!$this->razon_social_select) {
            $this->lotes = null;
            return;
        }

        $params = [
            'id_cliente' => $this->razon_social_select['codigo'],
            'id_empresa' => $this->razon_social_select['id_empresa'],
        ];

        if (app()->environment('local')) {
            $response = Http::get('https://aybarcorp.com/api/slin/lotes', $params);
            $lotes = $response->successful() ? $response->json() : null;
        } else {
            $lotes = $slinService->getLotes($params);
        }

        if (empty($lotes)) {
            $this->lotes = [];
            session()->flash('error', 'Inténtelo más tarde, por favor.');
            return;
        }

        $this->lotes = $lotes;

        $this->lote_select = null;
    }

    public function seleccionarLote(array $lote, SlinService $slinService)
    {
        $this->lote_select = $lote;

        $params = [
            'id_empresa' => $this->lote_select['id_empresa'],
            'id_cliente' => $this->lote_select['id_cliente'],
            'id_proyecto' => $this->lote_select['id_proyecto'],
            'id_etapa' => $this->lote_select['id_etapa'],
            'id_manzana' => $this->lote_select['id_manzana'],
            'id_lote' => $this->lote_select['id_lote'],
        ];

        if (app()->environment('local')) {
            $response = Http::get('https://aybarcorp.com/api/slin/cuotas', $params);
            $cronograma = $response->successful() ? $response->json() : null;
        } else {
            $cronograma = $slinService->getCuotas($params);
        }

        if (empty($cronograma)) {
            $this->cronograma = [];
            session()->flash('error', 'Inténtelo más tarde, por favor.');
            return;
        }

        $this->cronograma = $cronograma;
    }

    public function cerrarCronograma()
    {
        $this->lote_select = null;
        //$this->cronograma = [];
    }

    public function descargarPDF()
    {
        if (!$this->lote_select || empty($this->cronograma)) {
            session()->flash('error', 'Debe seleccionar un lote antes de descargar.');
            return;
        }

        $pdf = Pdf::loadView('pdf.cronograma', [
            'lote' => $this->lote_select,
            'cronograma' => $this->cronograma,
        ]);

        return response()->streamDownload(
            fn() => print($pdf->output()),
            'cronograma-' . $this->lote_select['id_recaudo'] . '.pdf'
        );
    }

    public function render()
    {
        return view('livewire.cliente.lote.lote-todo-livewire');
    }
}
