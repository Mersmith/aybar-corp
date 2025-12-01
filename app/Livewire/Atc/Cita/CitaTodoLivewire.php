<?php

namespace App\Livewire\Atc\Cita;

use App\Models\Cita;
use App\Models\User;
use App\Models\Sede;
use App\Models\MotivoCita;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class CitaTodoLivewire extends Component
{
    use WithPagination;

    public $sedes;
    public $motivos;
    public $usuarios_admin;
    public $usuarios_cliente;

    public $sede_id = '';
    public $motivo_cita_id = '';
    public $usuario_solicita_id = '';
    public $usuario_recibe_id = '';
    public $estado = '';
    public $buscar = '';

    public $fecha_inicio = '';
    public $fecha_fin = '';

    public $perPage = 20;

    /** Reset paginación cuando cambian filtros */
    public function updating($field)
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->sedes   = Sede::all();
        $this->motivos = MotivoCita::all();
        $this->usuarios_admin = User::where('role', 'admin')->get();
        $this->usuarios_cliente = User::where('role', 'cliente')->get();
    }

    public function resetFiltros()
    {
        $this->reset([
            'sede_id',
            'motivo_cita_id',
            'usuario_solicita_id',
            'usuario_recibe_id',
            'estado',
            'buscar',
            'fecha_inicio',
            'fecha_fin',
        ]);

        $this->perPage = 20;
        $this->resetPage();
    }

    public function render()
    {
        $citas = Cita::query()
            ->when($this->buscar, function ($q) {
                $q->where('id', 'like', "%{$this->buscar}%")
                    ->orWhereHas('solicitante', function ($sub) {
                        $sub->where('name', 'like', "%{$this->buscar}%");
                    })
                    ->orWhereHas('receptor', function ($sub) {
                        $sub->where('name', 'like', "%{$this->buscar}%");
                    });
            })

            ->when($this->sede_id, fn($q) => $q->where('sede_id', $this->sede_id))
            ->when($this->motivo_cita_id, fn($q) => $q->where('motivo_cita_id', $this->motivo_cita_id))
            ->when($this->usuario_solicita_id, fn($q) => $q->where('usuario_solicita_id', $this->usuario_solicita_id))
            ->when($this->usuario_recibe_id, fn($q) => $q->where('usuario_recibe_id', $this->usuario_recibe_id))
            ->when($this->estado, fn($q) => $q->where('estado', $this->estado))

            ->when(
                $this->fecha_inicio,
                fn($q) =>
                $q->whereDate('start_at', '>=', $this->fecha_inicio)
            )
            ->when(
                $this->fecha_fin,
                fn($q) =>
                $q->whereDate('start_at', '<=', $this->fecha_fin)
            )

            ->orderBy('start_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.atc.cita.cita-todo-livewire', compact('citas'));
    }
}
