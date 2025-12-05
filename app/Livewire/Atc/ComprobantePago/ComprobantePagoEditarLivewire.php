<?php

namespace App\Livewire\Atc\ComprobantePago;

use App\Models\ComprobantePago;
use App\Models\EstadoComprobantePago;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class ComprobantePagoEditarLivewire extends Component
{
    public $comprobante;
    public $estados, $estado_id = '';

    public $observacion;

    protected function rules()
    {
        return [
            'estado_id' => 'required',
            'observacion' => 'required',
        ];
    }

    public function mount($id)
    {
        $this->comprobante = ComprobantePago::findOrFail($id);
        $this->estado_id = $this->comprobante->estado_comprobante_pago_id;
        $this->observacion = $this->comprobante->observacion;

        $this->estados = EstadoComprobantePago::all();
    }

    public function store()
    {
        $this->validate();

        $this->comprobante->update([
            'estado_comprobante_pago_id' => $this->estado_id,
            'observacion' => $this->observacion,

        ]);

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    public function render()
    {
        return view('livewire.atc.comprobante-pago.comprobante-pago-editar-livewire');
    }
}
