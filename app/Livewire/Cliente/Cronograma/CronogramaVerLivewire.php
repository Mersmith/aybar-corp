<?php

namespace App\Livewire\Cliente\Cronograma;

use Livewire\Component;

class CronogramaVerLivewire extends Component
{
    public $lote;

    public function mount($lote)
    {
        $this->lote = $lote;
    }

    public function render()
    {
        return view('livewire.cliente.cronograma.cronograma-ver-livewire');
    }
}
