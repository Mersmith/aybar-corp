<?php

namespace App\Livewire\Marketing\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueDiezCrearLivewire extends Component
{
    public $nombre;

    public $titulo;
    public $titulo_descripcion;

    public $lista = [];

    public $activo = false;

    protected function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'titulo' => 'nullable|string|max:255',
            'titulo_descripcion' => 'nullable|string',
            'lista.*.iframe' => 'required',
            'activo' => 'boolean',
        ];
    }

    protected $validationAttributes = [
        'nombre' => 'nombre',
        'lista.*.iframe' => 'video frame',
    ];

    public function agregarItem()
    {
        $maxId = collect($this->lista)->max('id');
        $nextId = $maxId ? $maxId + 1 : 1;

        $this->lista[] = [
            'id' => $nextId,
            'iframe' => '',
        ];

        $this->dispatch('lista-updated', count($this->lista));
    }

    public function eliminarItem($index)
    {
        array_splice($this->lista, $index, 1);

        $this->dispatch('lista-updated', count($this->lista));
    }

    public function store()
    {
        $this->validate();

        Seccion::create([
            'nombre' => $this->nombre,
            'tipo' => 'bloque-10',
            'contenido' => [
                'titulo' => $this->titulo,
                'titulo_descripcion' => $this->titulo_descripcion,
                'lista' => $this->lista,
            ],
            'activo' => $this->activo,
        ]);

        $this->dispatch('alertaLivewire', 'Creado');

        return redirect()->route('admin.seccion.bloque-diez.vista.todo');
    }

    #[On('handleBloque10CrearOn')]
    public function handleBloque10CrearOn($item, $position)
    {
        $index = array_search($item, array_column($this->lista, 'id'));

        if ($index !== false) {
            $element = array_splice($this->lista, $index, 1)[0];
            array_splice($this->lista, $position, 0, [$element]);
        }
    }

    public function render()
    {
        return view('livewire.marketing.seccion.seccion-bloque-diez-crear-livewire');
    }
}
