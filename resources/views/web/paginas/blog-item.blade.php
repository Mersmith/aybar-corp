@extends('layouts.web.layout-web')

@section('titulo', $proyecto->nombre ?: '')

@section('contenido')
    <div class="g_centrar_pagina">
        <div class="g_pading_pagina">

           
           @dump($proyecto)
        </div>
    </div>
@endsection
