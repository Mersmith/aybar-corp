<?php

namespace App\Livewire\Admin\Lote;

use App\Models\Lote;
use App\Models\Proyecto;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;

#[Layout('layouts.admin.layout-admin')]
class LoteCrearLivewire extends Component
{
    public $proyectos;

    public $proyecto_id = "";
    public $numero_lote;
    public $manzana;
    public $area;

    protected function rules()
    {
        return [
            'proyecto_id' => 'required',
            'numero_lote' => [
                'required',
                'string',
                'max:255',
                Rule::unique('lotes')
                    ->where('proyecto_id', $this->proyecto_id)
                    ->where('manzana', $this->manzana)
            ],
            'manzana' => 'required|string|max:255',
            'area' => 'required|decimal:2',
        ];
    }

    public function mount()
    {
        $this->proyectos = Proyecto::all();
    }

    #[On('select-updated')]
    public function updateValue($value)
    {

        $this->proyecto_id = $value;
        $this->dispatch("update-value");
    }

    public function store()
    {
        $this->validate();

        Lote::create([
            'proyecto_id' => $this->proyecto_id,
            'numero_lote' => $this->numero_lote,
            'manzana' => $this->manzana,
            'area' => $this->area,
            'precio_lista' => 0,
        ]);

        $this->dispatch('alertaLivewire', "Creado");

        return redirect()->route('admin.lote.vista.todo');
    }

    public function render()
    {
        return view('livewire.admin.lote.lote-crear-livewire');
    }
}
