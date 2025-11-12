<?php

namespace App\Livewire\Admin\Blog;

use App\Models\Blog;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\On;

#[Layout('layouts.admin.layout-admin')]
class BlogEditarLivewire extends Component
{
    public $blog;

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
            'slug' => 'required|unique:blogs,slug,' . $this->blog->id,
            'imagen' => 'required|string|max:255',
            'contenido' => 'required|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_image' => 'required|string|max:255',
            'activo' => 'required|boolean',
        ];
    }

    public function mount($id)
    {
        $this->blog = Blog::findOrFail($id);

        $this->titulo = $this->blog->titulo;
        $this->slug = $this->blog->slug;
        $this->imagen = $this->blog->imagen;
        $this->contenido = $this->blog->contenido;
        $this->meta_title = $this->blog->meta_title;
        $this->meta_description = $this->blog->meta_description;
        $this->meta_image = $this->blog->meta_image;
        $this->activo = $this->blog->activo;
    }

    public function updatedTitulo($value)
    {
        $this->slug = Str::slug($value);
    }

    public function store()
    {
        $this->validate();

        $this->blog->update([
            'titulo' => $this->titulo,
            'slug' => $this->slug,
            'contenido' => $this->contenido,
            'imagen' => $this->imagen,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_image' => $this->meta_image,
            'activo' => $this->activo,
        ]);

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    #[On('eliminarBlogOn')]
    public function eliminarBlogOn()
    {
        if ($this->blog) {
            $this->blog->delete();

            return redirect()->route('admin.blog.vista.todo');
        }
    }

    public function render()
    {
        return view('livewire.admin.blog.blog-editar-livewire');
    }
}
