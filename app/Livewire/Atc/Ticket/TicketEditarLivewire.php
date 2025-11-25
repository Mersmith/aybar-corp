<?php

namespace App\Livewire\Atc\Ticket;

use App\Models\Area;
use App\Models\Canal;
use App\Models\Cliente;
use App\Models\EstadoTicket;
use App\Models\Ticket;
use App\Models\TicketHistorial;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

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

    public $historial = [];
    public $original = [];

    // Mapas para evitar consultas a la BD
    public $mapAreas = [];
    public $mapTipos = [];
    public $mapCanales = [];
    public $mapEstados = [];
    public $mapUsuarios = [];
    public $mapClientes = [];

    public function mount($id)
    {
        $this->ticket = Ticket::findOrFail($id);

        // Guardar estado original del ticket
        $this->original = $this->ticket->toArray();

        // Cargar catálogos
        $this->clientes = Cliente::all();
        $this->areas = Area::all();
        $this->canales = Canal::all();
        $this->estados = EstadoTicket::all();
        $this->usuarios = User::where('role', 'admin')->get();

        // Mapear datos para nombres (sin consultas)
        $this->mapClientes = $this->clientes->pluck('nombre', 'id')->toArray();
        $this->mapAreas = $this->areas->pluck('nombre', 'id')->toArray();
        $this->mapCanales = $this->canales->pluck('nombre', 'id')->toArray();
        $this->mapEstados = $this->estados->pluck('nombre', 'id')->toArray();
        $this->mapUsuarios = $this->usuarios->pluck('name', 'id')->toArray();

        // Cargar valores del ticket
        $this->cliente_id = $this->ticket->cliente_id;
        $this->area_id = $this->ticket->area_id;
        $this->canal_id = $this->ticket->canal_id;
        $this->estado_ticket_id = $this->ticket->estado_ticket_id;
        $this->usuario_asignado_id = $this->ticket->usuario_asignado_id;
        $this->asunto = $this->ticket->asunto;
        $this->descripcion = $this->ticket->descripcion;

        // Cargar tipos de solicitud dependientes del área
        $this->tipos_solicitudes = $this->ticket->area->tipos;
        $this->mapTipos = $this->tipos_solicitudes->pluck('nombre', 'id')->toArray();
        $this->tipo_solicitud_id = $this->ticket->tipo_solicitud_id;

        // Historial
        $this->historial = $this->ticket->historial()->latest()->get();
    }

    public function updatedAreaId($value)
    {
        $area = Area::find($value);

        $this->tipos_solicitudes = $area ? $area->tipos()->where('activo', true)->get() : [];
        $this->mapTipos = $this->tipos_solicitudes->pluck('nombre', 'id')->toArray();

        $this->tipo_solicitud_id = "";
    }

    public function store()
    {
        $old = $this->original;

        // Actualizar ticket
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

        $new = $this->ticket->fresh()->toArray();
        $cambios = [];

        // Campos a ignorar
        $ignorar = ['id', 'created_at', 'updated_at'];

        foreach ($new as $campo => $valorNuevo) {
            if (in_array($campo, $ignorar)) {
                continue;
            }

            $valorViejo = $old[$campo] ?? null;

            if ($valorNuevo != $valorViejo) {
                $nombreCampo = $this->nombreCampo($campo);
                $viejo = $this->valorLegible($campo, $valorViejo);
                $nuevo = $this->valorLegible($campo, $valorNuevo);

                $cambios[] = "$nombreCampo cambiado de '$viejo' a '$nuevo'";
            }
        }

        if (!empty($cambios)) {
            TicketHistorial::create([
                'ticket_id' => $this->ticket->id,
                'user_id' => auth()->id(),
                'accion' => 'Edición',
                'detalle' => implode(" | ", $cambios),
            ]);
        }

        $this->historial = $this->ticket->historial()->latest()->get();

        $this->dispatch('alertaLivewire', "Actualizado");

        $this->original = $new;
    }

    private function valorLegible($campo, $valor)
    {
        return match ($campo) {
            'cliente_id' => $this->mapClientes[$valor] ?? 'Sin asignar',
            'area_id' => $this->mapAreas[$valor] ?? 'Sin asignar',
            'tipo_solicitud_id' => $this->mapTipos[$valor] ?? 'Sin asignar',
            'canal_id' => $this->mapCanales[$valor] ?? 'Sin asignar',
            'estado_ticket_id' => $this->mapEstados[$valor] ?? 'Sin asignar',
            'usuario_asignado_id' => $this->mapUsuarios[$valor] ?? 'Sin asignar',
            default => $valor
        };
    }

    private function nombreCampo($campo)
    {
        return [
            'cliente_id' => 'Cliente',
            'area_id' => 'Área',
            'tipo_solicitud_id' => 'Tipo de solicitud',
            'canal_id' => 'Canal',
            'estado_ticket_id' => 'Estado',
            'usuario_asignado_id' => 'Usuario asignado',
            'asunto' => 'Asunto',
            'descripcion' => 'Descripción',
        ][$campo] ?? ucfirst(str_replace('_', ' ', $campo));
    }

    public function render()
    {
        return view('livewire.atc.ticket.ticket-editar-livewire');
    }
}
