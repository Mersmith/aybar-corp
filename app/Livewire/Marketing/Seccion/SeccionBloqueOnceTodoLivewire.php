<?php

namespace App\Livewire\Marketing\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueOnceTodoLivewire extends Component
{
    use WithPagination;

    public function render()
    {
        $items = Seccion::where('tipo', 'bloque-11')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.marketing.seccion.seccion-bloque-once-todo-livewire', [
            'items' => $items,
        ]);
    }
}
