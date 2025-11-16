<?php

namespace App\Livewire\Admin\Lote;

use App\Models\Lote;
use App\Models\Proyecto;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class LoteEditarLivewire extends Component
{
    public $lote;

    public $proyectos;

    public $proyecto_id;
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
                Rule::unique('lotes', 'numero_lote')
                    ->ignore($this->lote->id)
                    ->where('proyecto_id', $this->proyecto_id)
                    ->where('manzana', $this->manzana),
            ],
    
            'manzana' => 'required|string|max:255',
    
            'area' => 'required|decimal:2',
        ];
    }    

    protected $messages = [
        'numero_lote.unique' => 'Este número de lote ya existe en esta manzana del proyecto.',
    ];

    public function mount($id)
    {
        $this->lote = Lote::findOrFail($id);

        $this->proyectos = Proyecto::all();

        $this->proyecto_id = $this->lote->proyecto_id;
        $this->numero_lote = $this->lote->numero_lote;
        $this->manzana = $this->lote->manzana;
        $this->area = $this->lote->area;
    }

    public function store()
    {
        $this->validate();

        $this->lote->update([
            'proyecto_id' => $this->proyecto_id,
            'numero_lote' => $this->numero_lote,
            'manzana' => $this->manzana,
            'area' => $this->area,
        ]);

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    #[On('eliminarLoteOn')]
    public function eliminarLoteOn()
    {
        if ($this->lote) {
            $this->lote->delete();

            return redirect()->route('admin.lote.vista.todo');
        }
    }

    public function render()
    {
        return view('livewire.admin.lote.lote-editar-livewire');
    }
}
