<?php

namespace App\Livewire\Cliente\Lote;

use Livewire\Component;

class LoteTodoLivewire extends Component
{

    public $razones_sociales = [];
    public $razon_social = "";
    public $lotes = [];
    public $lotes_originales = [];


    public function mount()
    {
        $this->lotes_originales =  [
            [
                'razon_social'        => 'Razon 1',
                'nombre_proyecto'    => 'Proyecto 1',
                'manzana'            => 'Manzana 1',
                'lote'               => 'Lote 1',
                'cronograma_id'      => '1',
                'estado_cuenta_id'   => '2',
            ],
            [
                'razon_social'        => 'Razon 1',
                'nombre_proyecto'    => 'Proyecto 2',
                'manzana'            => 'Manzana 2',
                'lote'               => 'Lote 2',
                'cronograma_id'      => '3',
                'estado_cuenta_id'   => '4',
            ],
            [
                'razon_social'        => 'Razon 3',
                'nombre_proyecto'    => 'Proyecto 3',
                'manzana'            => 'Manzana 3',
                'lote'               => 'Lote 3',
                'cronograma_id'      => '5',
                'estado_cuenta_id'   => '6',
            ],
            [
                'razon_social'        => 'Razon 3',
                'nombre_proyecto'    => 'Proyecto 4',
                'manzana'            => 'Manzana 4',
                'lote'               => 'Lote 4',
                'cronograma_id'      => '7',
                'estado_cuenta_id'   => '8',
            ],
            [
                'razon_social'        => 'Razon 3',
                'nombre_proyecto'    => 'Proyecto 5',
                'manzana'            => 'Manzana 5',
                'lote'               => 'Lote 5',
                'cronograma_id'      => '9',
                'estado_cuenta_id'   => '10',
            ],
            [
                'razon_social'        => 'Razon 6',
                'nombre_proyecto'    => 'Proyecto 6',
                'manzana'            => 'Manzana 6',
                'lote'               => 'Lote 6',
                'cronograma_id'      => '11',
                'estado_cuenta_id'   => '12',
            ],
            [
                'razon_social'        => 'Razon 7',
                'nombre_proyecto'    => 'Proyecto 7',
                'manzana'            => 'Manzana 7',
                'lote'               => 'Lote 7',
                'cronograma_id'      => '13',
                'estado_cuenta_id'   => '14',
            ],
            [
                'razon_social'        => 'Razon 8',
                'nombre_proyecto'    => 'Proyecto 8',
                'manzana'            => 'Manzana 8',
                'lote'               => 'Lote 8',
                'cronograma_id'      => '15',
                'estado_cuenta_id'   => '16',
            ],
        ];

        $this->lotes = $this->lotes_originales;

        $this->razones_sociales = collect($this->lotes_originales)
            ->pluck('razon_social')
            ->unique()
            ->values()
            ->toArray();
    }

    public function updatedRazonSocial($value)
    {
        if ($value === "" || $value === "todos") {
            $this->lotes = $this->lotes_originales;
            return;
        }

        $this->lotes = collect($this->lotes_originales)
            ->where('razon_social', $value)
            ->values()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.cliente.lote.lote-todo-livewire');
    }
}
