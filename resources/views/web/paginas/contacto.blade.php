@extends('layouts.web.layout-web')

@section('titulo', 'Contacto')

@section('contenido')
    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">

            <div class="g_contenedor_columna">
                @include('partials.titulo-encabezado', [
                    'titulo' => 'ESTAMOS AQUÍ<br><span>PARA AYUDARTE</span>',
                    'descripcion' => 'Nos pondremos en contacto a la brevedad posible.',
                    'alineacion' => 'center',
                    'color' => 'color_1',
                ])
            </div>
        </div>
    </div>

    @include('partials.formulario-imagen')

@endsection
