<?php

namespace App\Livewire\Atc\EstadoComprobantePago;

use App\Models\EstadoComprobantePago;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class EstadoComprobantePagoEditarLivewire extends Component
{
    public $estado;

    public $nombre;
    public $icono;
    public $color;

    public $activo = false;

    protected function rules()
    {
        return [
            'nombre' => 'required|unique:estado_tickets,nombre,' . $this->estado->id,
            'activo' => 'required|boolean',
        ];
    }

    public function mount($id)
    {
        $this->estado = EstadoComprobantePago::findOrFail($id);

        $this->nombre = $this->estado->nombre;
        $this->icono = $this->estado->icono;
        $this->color = $this->estado->color;
        $this->activo = $this->estado->activo;
    }

    public function store()
    {
        $this->validate();

        $this->estado->update([
            'nombre' => $this->nombre,
            'icono' => $this->icono,
            'color' => $this->color,
            'activo' => $this->activo,
        ]);

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    #[On('eliminarEstadoComprobantePagoOn')]
    public function eliminarEstadoComprobantePagoOn()
    {
        if ($this->estado) {
            $this->estado->delete();

            return redirect()->route('admin.estado-comprobante-pago.vista.todo');
        }
    }

    public function render()
    {
        return view('livewire.atc.estado-comprobante-pago.estado-comprobante-pago-editar-livewire');
    }
}
