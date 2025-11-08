@extends('layouts.web.layout-web')

@section('titulo', 'Inicio')

@section('contenido')

@include('bloques.bloque-1', ['p_elemento' => $bloque1_1])

<div class="r_centrar_pagina">

    @include('partials.titulo-encabezado', [
    'titulo' => 'Nuestros proyectos',
    'alineacion' => 'left',
    ])

    @include('partials.slider-proyectos', ['p_elemento' => $posts])

    @include('bloques.bloque-8', ['p_elemento' => $bloque8_1])

</div>

@include('bloques.bloque-4', ['p_elemento' => $bloque4_1])

<div class="r_centrar_pagina">

    @include('partials.titulo-encabezado', [
    'titulo' => 'Noticias',
    'alineacion' => 'left',
    ])

    @include('partials.slider-post', ['p_elemento' => $posts])

</div>

@endsection