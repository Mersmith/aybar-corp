<?php

namespace App\Livewire\Cliente\Lote;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LoteTodoLivewire extends Component
{
    public $cliente_encontrado = null;

    public $razones_sociales = [];
    public $razon_social_id = "";
    public $razon_social_select;

    public $cliente_lotes = null;

    public $lotes = [];
    public $lotes_originales = [];

    public function mount()
    {
        $response = Http::get("https://aybarcorp.com/slin/cliente/" . Auth::user()->cliente->dni);

        if ($response->failed() || empty($response->json())) {
            session()->flash('error', 'Intentelo más tarde, por favor.');
            return;
        }

        $this->cliente_encontrado = $response->json();
        $this->razones_sociales = $this->cliente_encontrado['empresas'];
    }

    public function updatedRazonSocialId($value)
    {
        if (empty($value)) {
            $this->razon_social_select = null;
            $this->cliente_lotes = null;
            return;
        }

        $this->razon_social_select = collect($this->razones_sociales)
            ->firstWhere('id_empresa', $value);

        if (!$this->razon_social_select) {
            $this->cliente_lotes = null;
            return;
        }

        $params = [
            "id_cliente" => $this->razon_social_select['codigo'],
            "id_empresa" => $this->razon_social_select['id_empresa'],
        ];

        $response = Http::get("https://aybarcorp.com/slin/lotes", $params);

        if ($response->failed() || empty($response->json())) {
            $this->cliente_lotes = [];
            session()->flash('error', 'Intentelo más tarde, por favor.');
            return;
        }

        $this->cliente_lotes = $response->json();
    }

    public function render()
    {
        return view('livewire.cliente.lote.lote-todo-livewire');
    }
}
