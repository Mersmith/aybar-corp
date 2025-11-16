<?php

namespace App\Livewire\Admin\SeparacionLote;

use App\Models\SeparacionLote;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class SeparacionLoteTodoLivewire extends Component
{
    use WithPagination;

    public $buscar = '';
    public $perPage = 20;

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    public function render()
    {
        $items = SeparacionLote::where('estado', 'like', '%' . $this->buscar . '%')
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.admin.separacion-lote.separacion-lote-todo-livewire', compact('items'));
    }
}
