<?php

namespace App\Livewire\Marketing\FormularioPaginaContacto;

use App\Models\FormularioPaginaContacto;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class FormularioPaginaContactoTodoLivewire extends Component
{
    use WithPagination;
    public $buscar = '';
    public $perPage = 20;

    public function render()
    {
        $formularios = FormularioPaginaContacto::where(function ($query) {
            $query->where('nombre', 'like', '%' . $this->buscar . '%')
                ->orWhere('apellido', 'like', '%' . $this->buscar . '%')
                ->orWhere('dni', 'like', '%' . $this->buscar . '%')
                ->orWhere('email', 'like', '%' . $this->buscar . '%');
        })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.marketing.formulario-pagina-contacto.formulario-pagina-contacto-todo-livewire', [
            'formularios' => $formularios,
        ]);
    }
}
