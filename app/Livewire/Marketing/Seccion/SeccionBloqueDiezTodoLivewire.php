<?php

namespace App\Livewire\Marketing\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueDiezTodoLivewire extends Component
{
    use WithPagination;

    public function render()
    {
        $items = Seccion::where('tipo', 'bloque-10')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.marketing.seccion.seccion-bloque-diez-todo-livewire', [
            'items' => $items,
        ]);
    }
}
