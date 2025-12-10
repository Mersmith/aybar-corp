<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\Proyecto;

class InicioController extends Controller
{
    public function index()
    {
        $bloque1_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque-1');
        $bloque10_1 = app(SeccionController::class)->getSeccionPorTipo(2, 'bloque-10');

        $bloque8_1 = app(SeccionController::class)->getSeccionPorTipo(15, 'bloque-8');
        $bloque4_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque-4');
        $bloque3_1 = app(SeccionController::class)->getSeccionPorTipo(3, 'bloque-3');

        //dd($bloque10_1);

        $posts = $this->getComunicados();
        $proyectos = $this->getProyectos();

        return view('web.inicio', compact('bloque1_1', 'bloque10_1', 'bloque3_1', 'bloque8_1', 'posts', 'proyectos', 'bloque4_1',));
    }

    public function getComunicados()
    {
        $consulta_id = 1;

        $titulo = 'Comunicados';

        $data = Comunicado::where('activo', true)->latest()->take(6)->get();

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'posts' => $data,
        ];
    }

    public function getProyectos()
    {
        $consulta_id = 2;

        $titulo = 'Proyectos';

        $data = Proyecto::where('activo', true)->latest()->take(6)->get();

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'proyectos' => $data,
        ];
    }
}
