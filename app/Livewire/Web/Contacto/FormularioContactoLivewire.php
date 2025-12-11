<?php

namespace App\Livewire\Web\Contacto;

use Livewire\Component;
use App\Models\FormularioPaginaContacto;

class FormularioContactoLivewire extends Component
{
    public $nombre;
    public $email;
    public $telefono;
    public $dni;
    public $politica_uno = false;
    public $politica_dos = false;

    protected function rules()
    {
        return [
            'nombre'        => 'required|string|max:255',
            'email'         => 'required|email',
            'telefono'      => 'nullable|regex:/^[0-9]{9}$/',
            'dni'           => 'required|string|min:5',
            'politica_uno'  => 'accepted',
            'politica_dos'  => 'accepted',
        ];
    }

    protected $messages = [
        'politica_uno.accepted' => 'Debes aceptar la política de privacidad.',
        'politica_dos.accepted' => 'Debes aceptar los términos y condiciones.',
    ];

    public function enviar()
    {
        $this->validate();

        FormularioPaginaContacto::create([
            'nombre'            => $this->nombre,
            'email'             => $this->email,
            'telefono'          => $this->telefono,
            'dni'               => $this->dni,
            'politica_uno'      => $this->politica_uno,
            'politica_dos'      => $this->politica_dos,
            'tipo_formulario_id' => 1,
        ]);

        session()->flash('success', 'Tu mensaje ha sido enviado correctamente.');

        $this->reset(['nombre', 'email', 'telefono', 'dni', 'politica_uno', 'politica_dos']);
    }


    public function render()
    {
        return view('livewire.web.contacto.formulario-contacto-livewire');
    }
}
