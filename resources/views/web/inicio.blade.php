@extends('layouts.web.layout-web')

@section('titulo', 'Inicio')

@section('contenido')

@include('bloques.bloque-1', ['p_elemento' => $bloque1_1])

<div class="r_centrar_pagina">
    <div class="r_pading_pagina r_gap_pagina">
        <div class="r_contenedor_columna">

            @include('partials.titulo-encabezado', [
            'titulo' => 'Nuestros proyectos',
            'alineacion' => 'left',
            'color' => 'color_1',
            ])

            @include('partials.slider-proyectos', ['p_elemento' => $posts])

        </div>
    </div>
</div>

@include('bloques.bloque-4', ['p_elemento' => $bloque4_1])

<div class="r_centrar_pagina">
    <div class="r_pading_pagina r_gap_pagina">
        <div class="r_contenedor_columna">

            @include('bloques.bloque-8', ['p_elemento' => $bloque8_1])

            @include('partials.titulo-encabezado', [
            'titulo' => 'Noticias',
            'alineacion' => 'left',
            'color' => 'color_1',
            ])

            @include('partials.slider-post', ['p_elemento' => $posts])

        </div>
    </div>
</div>

@endsection