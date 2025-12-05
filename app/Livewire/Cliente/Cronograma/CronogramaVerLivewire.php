<?php

namespace App\Livewire\Cliente\Cronograma;

use Livewire\Component;
use Livewire\Attributes\On;

class CronogramaVerLivewire extends Component
{
    public $lote;
    public $cronograma = [];
    public $cuota = null;

    public function mount($lote, $cronograma)
    {
        $this->lote = $lote;
        $this->cronograma = $cronograma;
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
