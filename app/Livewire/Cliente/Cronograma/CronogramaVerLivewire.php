<?php

namespace App\Livewire\Cliente\Cronograma;

use Livewire\Component;

class CronogramaVerLivewire extends Component
{
    public $codigo_lote;
    public $lote;
    public $cronograma = [];

    public function mount($lote, $cronograma)
    {
        $this->lote = $lote;
        $this->cronograma = $cronograma;
    }

    public function seleccionarLote($codigo)
    {
        $this->codigo_lote = $codigo;
    }

    public function render()
    {
        return view('livewire.cliente.cronograma.cronograma-ver-livewire');
    }
}
