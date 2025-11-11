<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Proyecto;

class InicioController extends Controller
{
    public function index()
    {
        $bloque1_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque-1');
        $bloque8_1 = app(SeccionController::class)->getSeccionPorTipo(15, 'bloque-8');
        $bloque4_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque-4');
        $posts = $this->getBlog();
        $proyectos = $this->getProyectos();

        return view('web.inicio', compact('bloque1_1', 'bloque8_1', 'posts', 'proyectos', 'bloque4_1', ));
    }

    public function getBlog()
    {
        $consulta_id = 1;

        $titulo = 'Blog';

        $data = Blog::where('activo', true)->latest()->take(6)->get();

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
