<?php

namespace App\Livewire\Atc\Cita;

use App\Models\Cita;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Carbon\Carbon;

#[Layout('layouts.admin.layout-admin')]
class CitaTodoLivewire extends Component
{
    public $vista = 'mes'; // mes | semana | dia | anio
    public $fechaActual;
    public $eventos = [];

    public function mount()
    {
        $this->fechaActual = Carbon::now();
        $this->loadEventos();
    }

    public function cambiarVista($vista)
    {
        $this->vista = $vista;
        $this->loadEventos();
    }

    public function navegar($valor)
    {
        match ($this->vista) {
            'mes'    => $this->fechaActual->addMonths($valor),
            'semana' => $this->fechaActual->addWeeks($valor),
            'dia'    => $this->fechaActual->addDays($valor),
            'anio'   => $this->fechaActual->addYears($valor),
        };

        $this->loadEventos();
    }

    public function loadEventos()
    {
        $inicio = match ($this->vista) {
            'mes'    => $this->fechaActual->copy()->startOfMonth(),
            'semana' => $this->fechaActual->copy()->startOfWeek(Carbon::MONDAY),
            'dia'    => $this->fechaActual->copy()->startOfDay(),
            'anio'   => $this->fechaActual->copy()->startOfYear(),
        };

        $fin = match ($this->vista) {
            'mes'    => $this->fechaActual->copy()->endOfMonth(),
            'semana' => $this->fechaActual->copy()->endOfWeek(Carbon::SUNDAY),
            'dia'    => $this->fechaActual->copy()->endOfDay(),
            'anio'   => $this->fechaActual->copy()->endOfYear(),
        };

        $this->eventos = Cita::with(['receptor', 'sede', 'motivo'])
            ->whereBetween('start_at', [$inicio, $fin])
            ->orderBy('start_at')
            ->get()
            ->map(fn($cita) => [
                'id'        => $cita->id,
                'title'     => $cita->motivo->nombre,
                'cliente'   => $cita->receptor?->name,
                'sede'      => $cita->sede?->nombre,
                'estado'    => $cita->estado,

                'date'      => $cita->start_at->toDateString(),
                'time'      => $cita->start_at->format('H:i'),
                'end_time'  => $cita->end_at?->format('H:i'),

                'label'     => $cita->start_at->format('H:i') . " — " . $cita->motivo->nombre,

                'label_detallado' => sprintf(
                    "%s - %s | %s | %s | %s",
                    $cita->start_at->format('H:i'),
                    $cita->end_at?->format('H:i') ?? '—',
                    $cita->motivo->nombre,
                    $cita->receptor?->name,
                    ucfirst($cita->estado)
                ),
            ])
            ->toArray();
    }

    public function render()
    {
        return view('livewire.atc.cita.cita-todo-livewire');
    }
}
