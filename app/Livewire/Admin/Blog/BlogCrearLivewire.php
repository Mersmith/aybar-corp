<?php

namespace App\Livewire\Admin\Blog;

use App\Models\Blog;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class BlogCrearLivewire extends Component
{
    public $titulo;
    public $slug;
    public $imagen;
    public $contenido;
    public $meta_title;
    public $meta_description;
    public $meta_image;
    public $activo = false;

    protected function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'slug' => 'required|unique:blogs,slug',
            'imagen' => 'required|string|max:255',
            'contenido' => 'required|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_image' => 'required|string|max:255',
            'activo' => 'required|boolean',
        ];
    }

    public function updatedTitulo($value)
    {
        $this->slug = Str::slug($value);
    }

    public function crearPost()
    {
        $this->validate();

        Blog::create([
            'titulo' => $this->titulo,
            'slug' => $this->slug,
            'contenido' => $this->contenido,
            'imagen' => $this->imagen,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_image' => $this->meta_image,
            'activo' => $this->activo,
        ]);

        $this->dispatch('alertaLivewire', "Creado");

        return redirect()->route('admin.blog.vista.todo');
    }

    public function render()
    {
        return view('livewire.admin.blog.blog-crear-livewire');
    }
}
