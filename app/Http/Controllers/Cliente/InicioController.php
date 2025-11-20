<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function index()
    {
        $cliente = Cliente::where('user_id', Auth::id())->firstOrFail();

        return view('cliente.inicio', compact('cliente'));
    }

}
