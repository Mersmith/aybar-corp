<?php

namespace App\Livewire\Cliente\EstadoCuenta;

use Livewire\Component;

class EstadoCuentaVerLivewire extends Component
{
    public function mount($id)
    {
        if (!$id) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.cliente.estado-cuenta.estado-cuenta-ver-livewire');
    }
}
