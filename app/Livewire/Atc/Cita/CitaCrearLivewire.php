<?php

namespace App\Livewire\Atc\Cita;

use App\Models\Cita;
use App\Models\MotivoCita;
use App\Models\Sede;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class CitaCrearLivewire extends Component
{
    public $modal = false;
    public $cita_id;

    public $usuario_solicita_id;
    public $usuario_recibe_id;
    public $sede_id;
    public $motivo_cita_id;
    public $fecha;
    public $hora_inicio;
    public $hora_fin;

    #[On('abrirModalCrear')]
    public function abrirModalCrear($data)
    {
        $this->reset([
            'cita_id',
            'usuario_solicita_id',
            'usuario_recibe_id',
            'sede_id',
            'motivo_cita_id',
            'hora_inicio',
            'hora_fin',
        ]);

        $this->fecha = $data['fecha'];
        $this->modal = true;
    }

    #[On('abrirModalEditar')]
    public function abrirModalEditar($data)
    {
        $cita = Cita::findOrFail($data['id']);

        $this->cita_id = $cita->id;
        $this->usuario_solicita_id = $cita->usuario_solicita_id;
        $this->usuario_recibe_id = $cita->usuario_recibe_id;
        $this->sede_id = $cita->sede_id;
        $this->motivo_cita_id = $cita->motivo_cita_id;
        $this->fecha = $cita->fecha;
        $this->hora_inicio = $cita->hora_inicio;
        $this->hora_fin = $cita->hora_fin;

        $this->modal = true;
    }

    public function guardar()
    {
        $data = $this->validate([
            'usuario_solicita_id' => 'required',
            'usuario_recibe_id' => 'required',
            'sede_id' => 'nullable',
            'motivo_cita_id' => 'required',
            'fecha' => 'required|date',
            'hora_inicio' => 'required',
            'hora_fin' => 'nullable',
        ]);

        if ($this->cita_id) {
            $data['id'] = $this->cita_id;
            $this->dispatch('actualizarCita', $data);
        } else {
            $this->dispatch('crearCita', $data);
        }

        $this->modal = false;
    }

    public function render()
    {
        return view('livewire.atc.cita.cita-crear-livewire', [
            'users' => User::all(),
            'sedes' => Sede::all(),
            'motivos' => MotivoCita::all(),
        ]);
    }
}
