<?php

namespace App\Livewire\Cliente\Cronograma;

use Livewire\Component;

class CronogramaVerLivewire extends Component
{
    public $lote;
    public $cronograma = [];
    public $cuota;

    public function mount($lote, $cronograma)
    {
        $this->lote = $lote;
        $this->cronograma = $cronograma;
    }

    public function seleccionarCuota($cuota)
    {
        $this->cuota = $cuota;
    }

    public function render()
    {
        return view('livewire.cliente.cronograma.cronograma-ver-livewire');
    }
}
