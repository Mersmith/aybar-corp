<?php

namespace App\Livewire\Atc\Ticket;

use App\Models\Ticket;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class TicketTodoLivewire extends Component
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
        $tickets = Ticket::where('id', 'like', '%' . $this->buscar . '%')
        ->orderBy('created_at', 'desc')
        ->paginate($this->perPage);

        return view('livewire.atc.ticket.ticket-todo-livewire', compact('tickets'));
    }
}
