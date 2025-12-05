<?php

namespace App\Livewire\Cliente\Cronograma;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ComprobantePago;

class CronogramaVerLivewire extends Component
{
    public $lote;
    public $cronograma = [];
    public $cuota = null;

    public $comprobantes;

    public function mount($lote, $cronograma)
    {
        $this->comprobantes = ComprobantePago::where('razon_social', $lote['razon_social'])
            ->where('proyecto', $lote['descripcion'])
            ->where('manzana', $lote['id_manzana'])
            ->where('lote', $lote['id_lote'])
            ->get();

        $this->lote = $lote;

        $this->cronograma = collect($cronograma)->map(function ($cuota) {
            $cuota['comprobantes_count'] = $this->comprobantes
                ->where('codigo_cuota', $cuota['codigo'])
                ->count();

            return $cuota;
        });
    }

    public function seleccionarCuota($cuota)
    {
        $this->cuota = $cuota;
    }

    #[On('cerrarModalEvidenciaPagoOn')]
    public function cerrarModalEvidenciaPago()
    {
        $this->cuota = null;
    }

    public function render()
    {
        return view('livewire.cliente.cronograma.cronograma-ver-livewire');
    }
}
