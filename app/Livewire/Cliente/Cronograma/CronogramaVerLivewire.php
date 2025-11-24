<?php

namespace App\Livewire\Cliente\Cronograma;

use Livewire\Component;

class CronogramaVerLivewire extends Component
{
    public function mount($id)
    {
        if (!$id) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.cliente.cronograma.cronograma-ver-livewire');
    }
}
