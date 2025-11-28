<?php

namespace App\Livewire\Atc\Reporte;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\Area;
use App\Models\EstadoTicket;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin.layout-admin')]
class ReporteLivewire extends Component
{
    public $ticketsPorEstado = [];
    public $ticketsPorArea = [];
    public $ticketsPorFecha = [];

    public function mount()
    {
        $this->loadTicketsEstado();
        $this->loadTicketsArea();
        $this->loadTicketsFecha();
    }

    private function loadTicketsEstado()
    {
        $data = Ticket::select('estado_ticket_id', DB::raw('count(*) as total'))
            ->groupBy('estado_ticket_id')
            ->get();

        $this->ticketsPorEstado = [
            'labels' => $data->map(fn($i) => EstadoTicket::find($i->estado_ticket_id)?->nombre ?? 'Desconocido'),
            'data'   => $data->pluck('total'),
        ];
    }

    private function loadTicketsArea()
    {
        $data = Ticket::select('area_id', DB::raw('count(*) as total'))
            ->groupBy('area_id')
            ->get();

        $this->ticketsPorArea = [
            'labels' => $data->map(fn($i) => Area::find($i->area_id)?->nombre ?? 'Sin área'),
            'data'   => $data->pluck('total'),
        ];
    }

    private function loadTicketsFecha()
    {
        $data = Ticket::select(DB::raw('DATE(created_at) as fecha'), DB::raw('count(*) as total'))
            ->groupBy('fecha')
            ->orderBy('fecha')
            ->take(15)
            ->get();

        $this->ticketsPorFecha = [
            'labels' => $data->pluck('fecha'),
            'data'   => $data->pluck('total'),
        ];
    }

    public function render()
    {
        return view('livewire.atc.reporte.reporte-livewire');
    }
}
