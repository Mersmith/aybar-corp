<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;

class CronogramaController extends Controller
{
    public function index($id)
    {
        if (!$id) {
            abort(404);
        }

        return view('cliente.cronograma', compact('id'));
    }
}
