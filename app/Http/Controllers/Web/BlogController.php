<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $bloque5_1 = app(SeccionController::class)->getSeccionPorTipo(10, 'bloque-5');

        $posts = Blog::where('activo', true)->latest()->paginate(8);
        return view('web.paginas.blog', compact('posts', 'bloque5_1'));
    }

    public function show($slug)
    {
        $post = Blog::where('slug', $slug)->where('activo', true)->firstOrFail();

        $otrosPosts = Blog::where('activo', true)->latest()
            ->paginate(5);

        return view('web.paginas.blog-item', compact('post', 'otrosPosts'));
    }
}
