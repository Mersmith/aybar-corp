<?php

namespace App\Livewire\Atc\EstadoComprobantePago;

use App\Models\EstadoComprobantePago;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class EstadoComprobantePagoTodoLivewire extends Component
{
    use WithPagination;
    public $buscar = '';
    public $perPage = 20;

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    public function render()
    {
        $estados = EstadoComprobantePago::where('nombre', 'like', '%' . $this->buscar . '%')
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.atc.estado-comprobante-pago.estado-comprobante-pago-todo-livewire', compact('estados'));
    }
}
