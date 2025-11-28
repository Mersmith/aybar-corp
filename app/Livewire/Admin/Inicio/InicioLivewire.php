<?php

namespace App\Livewire\Admin\Inicio;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.admin.layout-admin')]
class InicioLivewire extends Component
{
    public $usuario;
    public $name;

    public function mount()
    {
        $this->usuario = auth()->user();

        // Asignar los valores del cliente a las propiedades del componente
        $this->name = $this->usuario->name;
    }

    public function actualizarDatos()
    {
        $this->validate([
            'name' => 'required|string|max:255'
        ]);

        $this->usuario->name = $this->name;
        $this->usuario->save();

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    public function render()
    {
        return view('livewire.admin.inicio.inicio-livewire');
    }
}
