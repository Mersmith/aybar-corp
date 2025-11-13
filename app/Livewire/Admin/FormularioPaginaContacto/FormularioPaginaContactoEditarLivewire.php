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

    public function mount($id)
    {
        $this->formulario = FormularioPaginaContacto::findOrFail($id);
        $this->leido = $this->formulario->leido;
        $this->estado = $this->formulario->estado;
    }

    public function update()
    {
        $this->validate([
            'leido' => 'boolean',
            'estado' => 'in:nuevo,revision,resuelto,cerrado',
        ]);

        $this->formulario->update([
            'leido' => $this->leido,
            'estado' => $this->estado,
        ]);

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    public function render()
    {
        return view('livewire.admin.formulario-pagina-contacto.formulario-pagina-contacto-editar-livewire');
    }
}
