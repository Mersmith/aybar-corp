<?php

namespace App\Livewire\Cliente\Lote;

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

    public function mount()
    {
        $response = Http::get("https://aybarcorp.com/slin/cliente/" . Auth::user()->cliente->dni);

        if ($response->failed() || empty($response->json())) {
            session()->flash('error', 'Intentelo más tarde, por favor.');
            return;
        }

        $this->cliente_encontrado = $response->json();
        $this->razones_sociales = $this->cliente_encontrado['empresas'];
    }

    public function updatedRazonSocialId($value)
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
            "id_cliente" => $this->razon_social_select['codigo'],
            "id_empresa" => $this->razon_social_select['id_empresa'],
        ];

        $response = Http::get("https://aybarcorp.com/slin/lotes", $params);

        if ($response->failed() || empty($response->json())) {
            $this->lotes = [];
            session()->flash('error', 'Intentelo más tarde, por favor.');
            return;
        }

        $this->lotes = $response->json();

        $this->lote_select = null;
    }

    public function seleccionarLote($lote)
    {
        $this->lote_select = $lote;

        $params = [
            "id_empresa" => $this->lote_select['id_empresa'],
            "id_cliente" => $this->lote_select['id_cliente'],
            "id_proyecto" => $this->lote_select['id_proyecto'],
            "id_etapa" => $this->lote_select['id_etapa'],
            "id_manzana" => $this->lote_select['id_manzana'],
            "id_lote" => $this->lote_select['id_lote'],
        ];

        $response = Http::get("https://aybarcorp.com/slin/cuotas", $params);

        if ($response->failed() || empty($response->json())) {
            $this->cronograma = [];
            session()->flash('error', 'Intentelo más tarde, por favor.');
            return;
        }

        $this->cronograma = $response->json();
    }

    public function render()
    {
        return view('livewire.cliente.lote.lote-todo-livewire');
    }
}
