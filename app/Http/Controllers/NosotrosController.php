<?php

namespace App\Http\Controllers;

class NosotrosController extends Controller
{
    public function index()
    {
        $bloque5_1 = app(SeccionController::class)->getSeccionPorTipo(5, 'bloque-5');

        $bloque6_1 = app(SeccionController::class)->getSeccionPorTipo(6, 'bloque-6');

        $bloque2_1 = app(SeccionController::class)->getSeccionPorTipo(7, 'bloque-2');
        $bloque2_2 = app(SeccionController::class)->getSeccionPorTipo(8, 'bloque-2');
        $bloque2_3 = app(SeccionController::class)->getSeccionPorTipo(9, 'bloque-2');

        $bloque7_1 = app(SeccionController::class)->getSeccionPorTipo(10, 'bloque-7');

        $bloque4_1 = app(SeccionController::class)->getSeccionPorTipo(11, 'bloque-4');

        return view('web.paginas.nosotros', compact('bloque5_1', 'bloque6_1', 'bloque2_1', 'bloque2_2', 'bloque2_3', 'bloque4_1', 'bloque7_1'));
    }
}
