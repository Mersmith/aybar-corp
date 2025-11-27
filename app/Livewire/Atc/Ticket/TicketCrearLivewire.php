<?php

namespace App\Livewire\Atc\Ticket;

use App\Models\Area;
use App\Models\Canal;
use App\Models\Cliente;
use App\Models\EstadoTicket;
use App\Models\Ticket;
use App\Models\TicketHistorial;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class TicketCrearLivewire extends Component
{
    public $areas, $area_id = "";
    public $tipos_solicitudes = [], $tipo_solicitud_id = "";
    public $canales, $canal_id = "";
    public $clientes, $cliente_id = "";

    public $usuarios = [], $usuario_asignado_id = "";

    public $asunto;
    public $descripcion;

    public $dni;
    public $cliente_encontrado = null;
    public $razones_sociales = [];
    public $razon_social_id = "";
    public $razon_social_select;
    public $lotes = null;
    public $lote_select = null;

    protected function rules()
    {
        return [
            'cliente_id' => 'required',
            'area_id' => 'required',
            'tipo_solicitud_id' => 'required',
            'canal_id' => 'required',
            'usuario_asignado_id' => 'required',
            'asunto' => 'required|string|max:255',
            'descripcion' => 'required|string|max:555',
        ];
    }

    public function mount()
    {
        $this->clientes = Cliente::all();
        $this->areas = Area::all();
        $this->canales = Canal::all();
    }

    public function updatedAreaId($value)
    {
        $area = Area::find($value);

        $this->tipos_solicitudes = $area ? $area->tipos()->where('activo', true)->get() : [];
        $this->usuarios = $area ? $area->usuarios()->where('activo', true)->get() : [];

        $this->tipo_solicitud_id = "";
        $this->usuario_asignado_id = "";
    }

    public function store()
    {
        $this->validate();

        $estadoAbiertoId = EstadoTicket::where('nombre', 'Abierto')->value('id');

        $ticket = Ticket::create([
            'cliente_id' => $this->cliente_id,
            'area_id' => $this->area_id,
            'tipo_solicitud_id' => $this->tipo_solicitud_id,
            'canal_id' => $this->canal_id,
            'estado_ticket_id' => $estadoAbiertoId,
            'usuario_asignado_id' => $this->usuario_asignado_id,
            'asunto' => $this->asunto,
            'descripcion' => $this->descripcion,
        ]);

        TicketHistorial::create([
            'ticket_id' => $ticket->id,
            'user_id' => auth()->id(),
            'accion' => 'Creación',
            'detalle' => 'Ticket creado con estado: Abierto',
        ]);

        $this->dispatch('alertaLivewire', "Creado");

        return redirect()->route('admin.ticket.vista.todo');
    }

    public function buscarCliente()
    {
        $response = Http::get("https://aybarcorp.com/slin/cliente/{$this->dni}");

        if ($response->failed() || empty($response->json())) {
            session()->flash('error', 'Intentelo más tarde, por favor.');
            return;
        }

        $this->cliente_encontrado = $response->json();
        $this->razones_sociales = $this->cliente_encontrado['empresas'];
    }

    public function updatedRazonSocialId($value)
    {
        $this->lotes = [];

        if (empty($value)) {
            $this->razon_social_select = null;
            $this->lotes = null;
            return;
        }

        $this->razon_social_select = collect($this->razones_sociales)
            ->firstWhere('id_empresa', $value);

        if (!$this->razon_social_select) {
            $this->lotes = null;
            return;
        }

        $params = [
            "id_cliente" => $this->razon_social_select['codigo'],
            "id_empresa" => $this->razon_social_select['id_empresa'],
        ];

        $response = Http::get("https://aybarcorp.com/slin/lotes", $params);

        if ($response->failed() || empty($response->json())) {
            $this->lotes = [];
            session()->flash('error', 'Intentelo más tarde, por favor.');
            return;
        }

        $this->lotes = $response->json();

        $this->lote_select = null;
    }

    public function render()
    {
        return view('livewire.atc.ticket.ticket-crear-livewire');
    }
}
