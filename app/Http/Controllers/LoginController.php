<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function indexIngresarCliente()
    {
        if (Auth::check() && Auth::user()->role === 'cliente') {
            return redirect()->route('cliente.home');
        }

        return view('web.login.index');
    }

    public function ingresarCliente(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->role === 'cliente') {
                return redirect()->route('cliente.home');
            }

            Auth::logout();
            return back()->withErrors([
                'email' => 'Acceso denegado. Solo clientes pueden ingresar aquí.',
            ]);
        }

        return back()->withErrors([
            'email' => 'Credenciales incorrectas.',
        ]);
    }

    public function logoutCliente(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('ingresar.cliente');
    }
}
