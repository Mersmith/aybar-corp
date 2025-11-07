<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class InicioController extends Controller
{
    public function index()
    {
        $bloque1_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque-1');
        $bloque8_1 = app(SeccionController::class)->getSeccionPorTipo(15, 'bloque-8');
        $bloque4_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque-4');
        $posts = $this->getBlog();

        return view('web.inicio', compact('bloque1_1', 'bloque8_1', 'posts', 'bloque4_1',));
    }

    public function getBlog()
    {
        $consulta_id = 1;

        $titulo = 'Blog';

        $data = Blog::where('estado', true)->latest()->take(6)->get();

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'posts' => $data,
        ];
    }
}
