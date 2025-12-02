<?php

namespace App\Livewire\Atc\Cita;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\User;
use App\Models\Sede;
use App\Models\MotivoCita;
use App\Models\Cita;

#[Layout('layouts.admin.layout-admin')]
class CitaCrearLivewire extends Component
{
    public $usuarios_admin, $usuario_solicita_id = '';
    public $usuarios_cliente, $usuario_recibe_id = '23';
    public $sedes, $sede_id = '';
    public $motivos, $motivo_cita_id = '';
    public $fecha_inicio;
    public $fecha_fin;
    public $estado = '';

    protected function rules()
    {
        return [
            'usuario_solicita_id' => 'required',
            'usuario_recibe_id' => 'required',
            'sede_id' => 'required',
            'motivo_cita_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'estado' => 'required',
        ];
    }

    public function mount()
    {
        $this->sedes = Sede::all();
        $this->motivos = MotivoCita::all();
        $this->usuarios_admin = User::where('role', 'admin')->get();
        $this->usuarios_cliente = User::where('role', 'cliente')->get();
    }

    public function store()
    {
        $this->validate();

        $cita = Cita::create([
            'usuario_solicita_id' => $this->usuario_solicita_id,
            'usuario_recibe_id' => $this->usuario_recibe_id,
            'sede_id' => $this->sede_id,
            'motivo_cita_id' => $this->motivo_cita_id,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'estado' => $this->estado,
        ]);

        $this->dispatch('alertaLivewire', "Creado");

        return redirect()->route('admin.cita.vista.todo');
    }

    public function render()
    {
        return view('livewire.atc.cita.cita-crear-livewire');
    }
}
