<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{    
    public function show($slug)
    {
        $proyecto = Proyecto::where('slug', $slug)->where('activo', true)->firstOrFail();

        return view('web.paginas.proyecto-item', compact('proyecto'));
    }
}
