<?php

namespace App\Livewire\Admin\FormularioPaginaContacto;

use App\Models\FormularioPaginaContacto;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class FormularioPaginaContactoEditarLivewire extends Component
{
    public $formulario;
    public $leido;
    public $estado;
    public $estadosDisponibles = [];

    public function mount($id)
    {
        $this->formulario = FormularioPaginaContacto::findOrFail($id);

        // ✅ Marcar como leído si aún no lo está
        if (!$this->formulario->leido) {
            $this->formulario->update(['leido' => true]);
        }

        $this->formulario = $this->formulario->fresh();
        $this->leido = $this->formulario->leido;
        $this->estado = $this->formulario->estado;

        // ✅ Definir los estados que puede elegir según el actual
        $this->definirEstadosDisponibles();
    }

    public function definirEstadosDisponibles()
    {
        $mapa = [
            'nuevo' => ['revision', 'resuelto', 'cerrado'],
            'revision' => ['resuelto', 'cerrado'],
            'resuelto' => ['cerrado'],
            'cerrado' => [],
        ];

        $this->estadosDisponibles = $mapa[$this->formulario->estado] ?? [];
    }

    public function update()
    {
        $this->validate([
            'estado' => 'in:nuevo,revision,resuelto,cerrado',
        ]);

        // ✅ Evitar retroceder
        if (!in_array($this->estado, $this->estadosDisponibles)) {
            $this->dispatch('alertaLivewire', "No puedes retroceder el estado");
            return;
        }

        // ✅ Actualizar el estado en BD
        $this->formulario->update(['estado' => $this->estado]);

        // ✅ Refrescar el modelo y redefinir estados permitidos
        $this->formulario = $this->formulario->fresh();
        $this->definirEstadosDisponibles();

        // ✅ Mantener sincronizado el valor mostrado
        $this->estado = $this->formulario->estado;

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    public function render()
    {
        return view('livewire.admin.formulario-pagina-contacto.formulario-pagina-contacto-editar-livewire');
    }
}
