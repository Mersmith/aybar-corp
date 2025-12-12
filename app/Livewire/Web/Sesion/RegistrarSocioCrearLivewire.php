<?php

namespace App\Livewire\Web\Sesion;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web.layout-web')]
class RegistrarSocioCrearLivewire extends Component
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

        $user = User::create([
            'name' => $this->email,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'rol' => 'socio',
        ]);

        Auth::login($user);

        $user->sendEmailVerificationNotification();

        return redirect()->route('verification.notice');
    }

    public function render()
    {
        return view('livewire.web.sesion.registrar-socio-crear-livewire');
    }
}
