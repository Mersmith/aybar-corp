<?php

namespace App\Livewire\Atc\ComprobantePago;

use App\Models\ComprobantePago;
use App\Models\EstadoComprobantePago;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class ComprobantePagoTodoLivewire extends Component
{
    use WithPagination;
    public $buscar = '';
    public $estado_id = '';
    public $perPage = 20;
    public $estados;

    public function mount()
    {
        $this->estados = EstadoComprobantePago::all();
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    public function updatingEstadoId()
    {
        $this->resetPage();
    }

    public function resetFiltros()
    {
        $this->reset([
            'estado_id',
            'buscar',
        ]);

        $this->perPage = 20;
        $this->resetPage();
    }

    public function render()
    {
        $evidencias = ComprobantePago::query()
            ->with(['cliente.user', 'estado'])
            ->when($this->buscar, function ($q) {
                $q->where(function ($sub) {
                    $sub->where('id', 'like', "%{$this->buscar}%")
                        ->orWhereHas('cliente.user', function ($sub2) {
                            $sub2->where('name', 'like', "%{$this->buscar}%");
                        })
                        ->orWhereHas('cliente', function ($sub3) {
                            $sub3->where('dni', 'like', "%{$this->buscar}%");
                        });
                });
            })
            ->when($this->estado_id, function ($q) {
                $q->where('estado_comprobante_pago_id', $this->estado_id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.atc.comprobante-pago.comprobante-pago-todo-livewire', compact('evidencias'));
    }
}
