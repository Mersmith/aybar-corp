<?php

namespace App\Livewire\Atc\Ticket;

use App\Models\Area;
use App\Models\Canal;
use App\Models\Cliente;
use App\Models\EstadoTicket;
use App\Models\Ticket;
use App\Models\TicketHistorial;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin.layout-admin')]
class TicketEditarLivewire extends Component
{
    public $ticket;

    public $areas, $area_id;
    public $tipos_solicitudes, $tipo_solicitud_id;
    public $canales, $canal_id;
    public $clientes, $cliente_id;
    public $estados, $estado_ticket_id;
    public $usuarios, $usuario_asignado_id;

    public $asunto;
    public $descripcion;

    public function mount($id)
    {
        $this->ticket = Ticket::findOrFail($id);

        // Cargar catálogos
        $this->clientes = Cliente::all();
        $this->areas = Area::all();
        $this->canales = Canal::all();
        $this->estados = EstadoTicket::all();
        $this->usuarios = User::where('role', 'admin')->get();

        // Cargar valores del ticket
        $this->cliente_id = $this->ticket->cliente_id;
        $this->area_id = $this->ticket->area_id;
        $this->canal_id = $this->ticket->canal_id;
        $this->estado_ticket_id = $this->ticket->estado_ticket_id;
        $this->usuario_asignado_id = $this->ticket->usuario_asignado_id;
        $this->asunto = $this->ticket->asunto;
        $this->descripcion = $this->ticket->descripcion;

        // Cargar tipos de solicitud dependiendo del área
        $this->tipos_solicitudes = $this->ticket->area->tipos;
        $this->tipo_solicitud_id = $this->ticket->tipo_solicitud_id;
    }

    public function updatedAreaId($value)
    {
        $area = Area::find($value);
        $this->tipos_solicitudes = $area ? $area->tipos()->where('activo', true)->get() : [];
        $this->tipo_solicitud_id = "";

        $this->registrarHistorial('Cambio de área', "Área cambiada a: " . ($area->nombre ?? 'N/A'));
    }

    public function updatedEstadoTicketId($value)
    {
        $estado = EstadoTicket::find($value);
        $this->registrarHistorial('Cambio de estado', "Nuevo estado: $estado->nombre");
    }

    public function updatedUsuarioAsignadoId($value)
    {
        $user = User::find($value);
        $this->registrarHistorial('Asignación', "Usuario asignado: $user->name");
    }

    public function updatedTipoSolicitudId($value)
    {
        $this->registrarHistorial('Cambio de tipo de solicitud', "Tipo de solicitud cambiado");
    }

    public function store()
    {
        $this->ticket->update([
            'cliente_id' => $this->cliente_id,
            'area_id' => $this->area_id,
            'tipo_solicitud_id' => $this->tipo_solicitud_id,
            'canal_id' => $this->canal_id,
            'estado_ticket_id' => $this->estado_ticket_id,
            'usuario_asignado_id' => $this->usuario_asignado_id,
            'asunto' => $this->asunto,
            'descripcion' => $this->descripcion,
        ]);

        $this->registrarHistorial('Edición', "Ticket editado por el usuario.");

        $this->dispatch('alertaLivewire', "Actualizado");

        //return redirect()->route('admin.ticket.vista.todo');
    }

    private function registrarHistorial($accion, $detalle)
    {
        TicketHistorial::create([
            'ticket_id' => $this->ticket->id,
            'user_id' => auth()->id(),
            'accion' => $accion,
            'detalle' => $detalle,
        ]);
    }

    public function render()
    {
        return view('livewire.atc.ticket.ticket-editar-livewire');
    }
}
