<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\SeccionController;

class NosotrosController extends Controller
{
    public function index()
    {
        $bloque5_1 = app(SeccionController::class)->getSeccionPorTipo(5, 'bloque-5');

        $bloque6_1 = app(SeccionController::class)->getSeccionPorTipo(6, 'bloque-6');

        $bloque2_1 = app(SeccionController::class)->getSeccionPorTipo(7, 'bloque-2');

        $bloque7_1 = app(SeccionController::class)->getSeccionPorTipo(8, 'bloque-7');

        $bloque11_1 = app(SeccionController::class)->getSeccionPorTipo(3, 'bloque-11');

        return view('web.paginas.nosotros', compact('bloque5_1', 'bloque6_1', 'bloque2_1', 'bloque7_1', 'bloque11_1'));
    }
}
