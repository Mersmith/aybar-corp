<?php

namespace App\Livewire\Atc\Ticket;

use App\Models\Area;
use App\Models\Ticket;
use App\Models\TicketDerivado;
use App\Models\TicketHistorial;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class TicketDerivadoLivewire extends Component
{
    public Ticket $ticket;

    // Catálogos
    public $areas;
    public $usuarios;

    // Form
    public $a_area_id; // area destino
    public $usuario_recibe_id;
    public $motivo;

    // Mapas para mostrar nombres sin más queries
    public $mapAreas = [];
    public $mapUsuarios = [];

    // Lista de derivaciones
    public $derivaciones = [];

    public function mount($id)
    {
        $this->ticket = Ticket::findOrFail($id);

        // Cargar catálogos
        $this->areas = Area::all();
        $this->usuarios = User::where('role', 'admin')->get();

        // Mapas
        $this->mapAreas = $this->areas->pluck('nombre', 'id')->toArray();
        $this->mapUsuarios = $this->usuarios->pluck('name', 'id')->toArray();

        // Valores por defecto
        $this->a_area_id = null;
        $this->usuario_recibe_id = $this->ticket->usuario_asignado_id;
        $this->motivo = null;

        // Derivaciones previas
        $this->derivaciones = $this->ticket->derivados()->latest()->get();
    }

    protected function rules()
    {
        return [
            'a_area_id' => 'required|exists:areas,id',
            'usuario_recibe_id' => 'nullable|exists:users,id',
            'motivo' => 'nullable|string|max:2000',
        ];
    }

    public function derivar()
    {
        $this->validate();

        $deAreaId = $this->ticket->area_id;

        $derivado = TicketDerivado::create([
            'ticket_id' => $this->ticket->id,
            'de_area_id' => $deAreaId,
            'a_area_id' => $this->a_area_id,
            'usuario_deriva_id' => auth()->id(),
            'usuario_recibe_id' => $this->usuario_recibe_id,
            'motivo' => $this->motivo,
        ]);

        $this->ticket->update([
            'area_id' => $this->a_area_id,
            'usuario_asignado_id' => $this->usuario_recibe_id,
        ]);

        $detalle = "Derivado del área '" . ($this->mapAreas[$deAreaId] ?? $deAreaId) .
            "' a '" . ($this->mapAreas[$this->a_area_id] ?? $this->a_area_id) . "'.";
        if (!empty($this->motivo)) {
            $detalle .= " Motivo: " . $this->motivo;
        }

        TicketHistorial::create([
            'ticket_id' => $this->ticket->id,
            'user_id' => auth()->id(),
            'accion' => 'Derivación',
            'detalle' => $detalle,
        ]);

        $this->derivaciones = $this->ticket->derivados()->latest()->get();
        $this->dispatch('alertaLivewire', "Creado");

        $this->a_area_id = null;
        $this->motivo = null;
    }

    public function render()
    {
        return view('livewire.atc.ticket.ticket-derivado-livewire');
    }
}
