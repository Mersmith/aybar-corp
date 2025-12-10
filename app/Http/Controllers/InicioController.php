<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\GrupoProyecto;

class InicioController extends Controller
{
    public function index()
    {
        $bloque1_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque-1');
        $bloque10_1 = app(SeccionController::class)->getSeccionPorTipo(2, 'bloque-10');
        $bloque11_1 = app(SeccionController::class)->getSeccionPorTipo(3, 'bloque-11');

        $bloque8_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque-8');
        $bloque4_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque-4');
        $bloque3_1 = app(SeccionController::class)->getSeccionPorTipo(3, 'bloque-3');

        //dd($bloque10_1);

        $proyectos = $this->getGrupoProyectos();
        $posts = $this->getBlogs();

        return view('web.inicio', compact('bloque1_1', 'bloque10_1', 'bloque11_1', 'bloque3_1', 'bloque8_1', 'posts', 'proyectos', 'bloque4_1',));
    }

    public function getBlogs()
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

    public function getGrupoProyectos()
    {
        $consulta_id = 2;

        $titulo = 'Proyectos';

        $data = GrupoProyecto::where('activo', true)->latest()->take(6)->get();

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'proyectos' => $data,
        ];
    }
}
