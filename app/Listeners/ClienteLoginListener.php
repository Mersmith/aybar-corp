<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Session;

class ClienteLoginListener
{
    public function handle(Login $event): void
    {
        $user = $event->user;

        if (method_exists($user, 'hasRole') && $user->hasRole('cliente')) {
            Session::flash(
                'bienvenida',
                '¡Bienvenido a tu plataforma digital!'
            );
        }

        /*if ($user->rol === 'cliente') {
            Session::flash(
                'bienvenida',
                '¡Bienvenido a tu plataforma digital!'
            );
        }*/
    }
}
