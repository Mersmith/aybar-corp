<?php

namespace App\Livewire\Admin\SeparacionLote;

use App\Models\Cliente;
use App\Models\Lote;
use App\Models\Proyecto;
use App\Models\SeparacionLote;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Database\QueryException;

#[Layout('layouts.admin.layout-admin')]
class SeparacionLoteCrearLivewire extends Component
{
    public $clientes;
    public $proyectos;
    public $lotes = [];

    public $cliente_id = "";
    public $proyecto_id = "";
    public $lote_id = "";
    public $monto = 0;
    public $fecha_separacion;
    public $estado = "activa";

    protected function rules()
    {
        return [
            'cliente_id' => 'required|exists:clientes,id',
            'proyecto_id' => 'required|exists:proyectos,id',
            'lote_id' => 'required|exists:lotes,id',
            'monto' => 'required|numeric|min:1',
            'fecha_separacion' => 'required|date',
            'estado' => 'required|in:activa,usada_en_venta,cancelada',
        ];
    }

    public function mount()
    {
        $this->clientes = Cliente::all();
        $this->proyectos = Proyecto::all();
    }

    public function updatedProyectoId($value)
    {
        $this->lotes = Lote::where('proyecto_id', $value)->get();
        $this->lote_id = "";
    }

    public function store()
    {
        $this->validate();

        try {
            SeparacionLote::create([
                'cliente_id' => $this->cliente_id,
                'lote_id' => $this->lote_id,
                'monto' => $this->monto,
                'fecha_separacion' => $this->fecha_separacion,
                'estado' => $this->estado,
            ]);
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                $this->dispatch(
                    'alertaLivewire',
                    "Ya existe una separación ACTIVA para este lote."
                );
                return;
            }

            throw $e;
        }

        $this->dispatch('alertaLivewire', "Creado");
        return redirect()->route('admin.separacion-lote.vista.todo');
    }

    public function render()
    {
        return view('livewire.admin.separacion-lote.separacion-lote-crear-livewire');
    }
}
