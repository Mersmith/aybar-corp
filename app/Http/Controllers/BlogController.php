<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::where('estado', true)->latest()->paginate(6);
        return view('web.paginas.blog', compact('posts'));
    }

    public function show($slug)
    {
        $post = Blog::where('slug', $slug)->where('estado', true)->firstOrFail();

        $otrosPosts = Blog::where('estado', true)->latest()
            ->paginate(5);

        return view('web.paginas.blog-item', compact('post', 'otrosPosts'));
    }
}
