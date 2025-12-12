<?php

namespace App\Livewire\Atc\EstadoComprobantePago;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin.layout-admin')]
class EstadoComprobantePagoTodoLivewire extends Component
{
    public function render()
    {
        return view('livewire.atc.estado-comprobante-pago.estado-comprobante-pago-todo-livewire');
    }
}
