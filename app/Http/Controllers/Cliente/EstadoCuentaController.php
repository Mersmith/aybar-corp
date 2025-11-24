<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;

class EstadoCuentaController extends Controller
{
    public function index($id)
    {
        if (!$id) {
            abort(404);
        }

        return view('cliente.estado-cuenta', compact('id'));
    }
}
