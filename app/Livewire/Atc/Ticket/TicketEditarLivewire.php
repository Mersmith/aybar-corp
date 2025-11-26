<?php

namespace App\Livewire\Atc\Ticket;

use App\Models\EstadoTicket;
use App\Models\Ticket;
use App\Models\TicketHistorial;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class TicketEditarLivewire extends Component
{
    public $ticket;

    public $asunto;
    public $descripcion;

    public $estados, $estado_ticket_id;

    public $historial = [];

    public $mapEstados = [];

    public function mount($id)
    {
        $this->ticket = Ticket::findOrFail($id);

        $this->estados     = EstadoTicket::all();
        $this->mapEstados  = $this->estados->pluck('nombre', 'id')->toArray();

        $this->estado_ticket_id = $this->ticket->estado_ticket_id;
        $this->asunto           = $this->ticket->asunto;
        $this->descripcion      = $this->ticket->descripcion;

        $this->historial = $this->ticket->historial()->latest()->get();
    }

    public function store()
    {
        $old = $this->ticket->toArray();

        $data = [
            'estado_ticket_id' => $this->estado_ticket_id,
            'asunto'           => $this->asunto,
            'descripcion'      => $this->descripcion,
        ];

        $this->ticket->update($data);

        $cambios = [];

        foreach ($data as $campo => $valorNuevo) {

            $valorViejo = $old[$campo] ?? null;

            if ($valorNuevo != $valorViejo) {

                $nombreCampo = $this->nombreCampo($campo);
                $viejo       = $this->valorLegible($campo, $valorViejo);
                $nuevo       = $this->valorLegible($campo, $valorNuevo);

                $cambios[] = "$nombreCampo cambiado de '$viejo' a '$nuevo'";
            }
        }

        if (!empty($cambios)) {
            TicketHistorial::create([
                'ticket_id' => $this->ticket->id,
                'user_id'   => auth()->id(),
                'accion'    => 'Edición',
                'detalle'   => implode(" | ", $cambios),
            ]);
        }

        $this->historial = $this->ticket->historial()->latest()->get();

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    protected function nombreCampo($campo)
    {
        return [
            'estado_ticket_id' => 'Estado',
            'asunto'           => 'Asunto',
            'descripcion'      => 'Descripción',
        ][$campo] ?? ucfirst(str_replace('_', ' ', $campo));
    }

    protected function valorLegible($campo, $valor)
    {
        if (!$valor) return 'Sin asignar';

        return match ($campo) {
            'estado_ticket_id' => $this->mapEstados[$valor] ?? $valor,
            default            => $valor
        };
    }

    public function render()
    {
        return view('livewire.atc.ticket.ticket-editar-livewire');
    }
}
