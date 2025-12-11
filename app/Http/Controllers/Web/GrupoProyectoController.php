<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\GrupoProyecto;

class GrupoProyectoController extends Controller
{
    public function index()
    {
        $bloque5_1 = app(SeccionController::class)->getSeccionPorTipo(9, 'bloque-5');

        $items = GrupoProyecto::where('activo', true)->latest()->paginate(12);
        return view('web.paginas.grupo-proyecto', compact('items', 'bloque5_1'));
    }

    public function show($slug)
    {
        $grupo_proyecto = GrupoProyecto::where('slug', $slug)->where('activo', true)->firstOrFail();


        $items = $grupo_proyecto->proyectos()
        ->where('activo', true)
        ->paginate(12);

        return view('web.paginas.grupo-proyecto-item', compact('grupo_proyecto', 'items'));
    }
}
