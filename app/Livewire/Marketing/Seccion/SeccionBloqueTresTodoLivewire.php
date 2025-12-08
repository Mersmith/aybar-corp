<?php

namespace App\Livewire\Marketing\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueTresTodoLivewire extends Component
{
    use WithPagination;

    public function render()
    {
        $secciones = Seccion::where('tipo', 'bloque-3')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.marketing.seccion.seccion-bloque-tres-todo-livewire', [
            'secciones' => $secciones,
        ]);
    }
}
