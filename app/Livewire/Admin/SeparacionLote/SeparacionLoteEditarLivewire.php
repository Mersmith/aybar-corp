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
class SeparacionLoteEditarLivewire extends Component
{
    public $separacion;

    public $clientes = [];
    public $proyectos = [];
    public $lotes = [];

    public $cliente_id = "";
    public $proyecto_id = "";
    public $lote_id = "";
    public $monto = 0;
    public $fecha_separacion;
    public $estado = "";

    public function mount($id)
    {
        $this->separacion = SeparacionLote::findOrFail($id);

        // Si está usada en venta → no se puede editar
        if ($this->separacion->estado === 'usada_en_venta') {
            $this->dispatch('alertaLivewire', "Esta separación está vinculada a una venta. No se puede editar.");
            return;
        }

        $this->clientes = Cliente::all();
        $this->proyectos = Proyecto::all();

        // Cargar los datos actuales
        $this->cliente_id = $this->separacion->cliente_id;
        $this->proyecto_id = $this->separacion->lote->proyecto_id;
        $this->lote_id = $this->separacion->lote_id;
        $this->monto = $this->separacion->monto;
        $this->fecha_separacion = $this->separacion->fecha_separacion;
        $this->estado = $this->separacion->estado;

        // cargar lotes del proyecto actual
        $this->lotes = Lote::where('proyecto_id', $this->proyecto_id)->get();
    }

    protected function rules()
    {
        return [
            'cliente_id' => 'required|exists:clientes,id',
            'proyecto_id' => 'required|exists:proyectos,id',
            'lote_id' => 'required|exists:lotes,id',
            'monto' => 'required|numeric|min:1',
            'fecha_separacion' => 'required|date',
            'estado' => 'required|in:activa,cancelada',
        ];
    }

    public function updatedProyectoId($value)
    {
        $this->lotes = Lote::where('proyecto_id', $value)->get();
        $this->lote_id = "";
    }

    public function update()
    {
        if ($this->separacion->estado === 'usada_en_venta') {
            $this->dispatch('alertaLivewire', "No se puede editar esta separación porque está usada en venta.");
            return;
        }

        $this->validate();

        try {
            $this->separacion->update([
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
                    "No se puede activar esta separación porque el lote ya tiene otra separación activa."
                );
                return;
            }

            throw $e;
        }

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    public function render()
    {
        return view('livewire.admin.separacion-lote.separacion-lote-editar-livewire');
    }
}
