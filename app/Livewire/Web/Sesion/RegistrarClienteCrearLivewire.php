<?php

namespace App\Livewire\Web\Sesion;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

#[Layout('layouts.web.layout-web')]
class RegistrarClienteCrearLivewire extends Component
{
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ];

    public function registrar()
    {
        $this->validate();

        User::create([
            'name' => $this->email,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'cliente',
        ]);
    }

    public function render()
    {
        return view('livewire.web.sesion.registrar-cliente-crear-livewire');
    }
}
