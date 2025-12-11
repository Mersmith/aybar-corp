<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\GrupoProyecto;
use App\Http\Controllers\Web\SeccionController;

class InicioController extends Controller
{
    public function index()
    {
        $bloque1_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque-1');
        $bloque10_1 = app(SeccionController::class)->getSeccionPorTipo(2, 'bloque-10');
        $bloque11_1 = app(SeccionController::class)->getSeccionPorTipo(3, 'bloque-11');

        $bloque8_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque-8');

        $proyectos = $this->getGrupoProyectos();
        $posts = $this->getBlogs();

        return view('web.inicio', compact('bloque1_1', 'bloque10_1', 'bloque11_1', 'bloque8_1', 'proyectos', 'posts'));
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
