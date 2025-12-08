<?php

namespace App\Livewire\Marketing\Blog;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin.layout-admin')]
class BlogTodoLivewire extends Component
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
        $posts = Blog::where('titulo', 'like', '%' . $this->buscar . '%')
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.marketing.blog.blog-todo-livewire', compact('posts'));
    }
}
