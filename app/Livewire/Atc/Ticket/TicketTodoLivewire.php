<?php

namespace App\Livewire\Atc\Ticket;

use App\Models\Ticket;
use App\Models\EstadoTicket;
use App\Models\Area;
use App\Models\TipoSolicitud;
use App\Models\Canal;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class TicketTodoLivewire extends Component
{
    use WithPagination;

    public $estados;
    public $areas;
    public $solicitudes;
    public $canales;

    public $buscar = '';
    public $estado = '';
    public $area = '';
    public $solicitud = '';
    public $canal = '';
    public $perPage = 20;

    public function mount()
    {
        $this->estados = EstadoTicket::all();
        $this->areas = Area::all();
        $this->solicitudes = TipoSolicitud::all();
        $this->canales = Canal::all();
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }
    public function updatingEstado()
    {
        $this->resetPage();
    }
    public function updatingArea()
    {
        $this->resetPage();
    }
    public function updatingSolicitud()
    {
        $this->resetPage();
    }
    public function updatingCanal()
    {
        $this->resetPage();
    }

    public function render()
    {
        $tickets = Ticket::query()
            ->when($this->buscar, function ($query) {
                $query->where('id', 'like', "%{$this->buscar}%")
                    ->orWhereHas('cliente', function ($q) {
                        $q->where('name', 'like', "%{$this->buscar}%");
                    })
                    ->orWhereHas('cliente.cliente', function ($q) {
                        $q->where('dni', 'like', "%{$this->buscar}%")
                            ->orWhere('nombre_completo', 'like', "%{$this->buscar}%");
                    });
            })
            ->when($this->estado, fn($q) => $q->where('estado_ticket_id', $this->estado))
            ->when($this->area, fn($q) => $q->where('area_id', $this->area))
            ->when($this->solicitud, fn($q) => $q->where('tipo_solicitud_id', $this->solicitud))
            ->when($this->canal, fn($q) => $q->where('canal_id', $this->canal))
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.atc.ticket.ticket-todo-livewire', compact('tickets'));
    }
}
