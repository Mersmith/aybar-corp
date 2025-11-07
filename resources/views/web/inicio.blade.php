@extends('layouts.web.layout-web')

@section('titulo', 'Inicio')

@section('contenido')

@include('bloques.bloque-1', ['p_elemento' => $bloque1_1])

<div class="r_centrar_pagina">
    <h2>Assss</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>2</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>
    <h2>1</h2><br><br><br>

    @include('bloques.bloque-8', ['p_elemento' => $bloque8_1])

    @include('bloques.bloque-4', ['p_elemento' => $bloque4_1])

    @include('partials.titulo-encabezado', [
    'titulo' => 'Noticias',
    'alineacion' => 'left',
    ])

    @include('partials.slider-post', ['p_elemento' => $posts])
</div>

@endsection