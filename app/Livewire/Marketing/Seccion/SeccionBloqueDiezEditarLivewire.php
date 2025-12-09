<?php

namespace App\Livewire\Marketing\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueDiezEditarLivewire extends Component
{
    public $seccion;

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

    public function mount($id)
    {
        $this->seccion = Seccion::findOrFail($id);

        $this->nombre = $this->seccion->nombre;
        $this->activo = $this->seccion->activo;

        $contenido = $this->seccion->contenido ?? [];

        $this->titulo = $this->lista = $contenido['titulo'];
        $this->titulo_descripcion = $this->lista = $contenido['titulo_descripcion'];

        if (isset($contenido['lista']) && is_array($contenido['lista'])) {
            $this->lista = $contenido['lista'];
        } else {
            $this->lista = [
                [
                    'id' => 1,
                    'iframe' => '',
                ],
            ];
        }
    }

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

        $this->seccion->update([
            'nombre' => $this->nombre,
            'contenido' => [
                'titulo' => $this->titulo,
                'titulo_descripcion' => $this->titulo_descripcion,
                'lista' => $this->lista,
            ],
            'activo' => $this->activo,
        ]);

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    #[On('handleBloque10EditarOn')]
    public function handleBloque10EditarOn($item, $position)
    {
        $index = array_search($item, array_column($this->lista, 'id'));

        if ($index !== false) {
            $element = array_splice($this->lista, $index, 1)[0];
            array_splice($this->lista, $position, 0, [$element]);
        }
    }

    #[On('eliminarSeccion10On')]
    public function eliminarSeccion10On()
    {
        if ($this->seccion) {
            $this->seccion->delete();

            return redirect()->route('admin.seccion.bloque-diez.vista.todo');
        }
    }

    public function render()
    {
        return view('livewire.marketing.seccion.seccion-bloque-diez-editar-livewire');
    }
}
