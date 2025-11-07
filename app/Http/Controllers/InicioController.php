<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $bloque1_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque-1');
        $bloque8_1 = app(SeccionController::class)->getSeccionPorTipo(15, 'bloque-8');

        return view('web.inicio', compact('bloque1_1', 'bloque8_1'));
    }
}
