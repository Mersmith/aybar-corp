<?php

namespace App\Livewire\Marketing\Pagina;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Pagina;

#[Layout('layouts.admin.layout-admin')]
class PaginaTodoLivewire extends Component
{
    public function render()
    {
        $paginas = Pagina::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.marketing.pagina.pagina-todo-livewire', [
            'paginas' => $paginas,
        ]);
    }
}
