@extends('layouts.web.layout-web')

@section('titulo', 'Inicio')

@section('contenido')

@include('bloques.bloque-1', ['p_elemento' => $bloque1_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina g_margin_top_40 g_margin_bottom_40">

            @include('bloques.bloque-10', ['p_elemento' => $bloque10_1])

            @include('partials.titulo-encabezado', [
            'titulo' => 'Nuestros proyectos',
            'alineacion' => 'left',
            'color' => 'color_1',
            ])

            @include('partials.slider-proyectos', ['p_elemento' => $proyectos])

            @include('bloques.bloque-3', ['p_elemento' => $bloque3_1])
        </div>
    </div>
</div>


@include('bloques.bloque-4', ['p_elemento' => $bloque4_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina">

            <div>
                @include('bloques.bloque-8', ['p_elemento' => $bloque8_1])
            </div>

            <div class="r_margin_bottom_40">
                @include('partials.titulo-encabezado', [
                'titulo' => 'Comunicados',
                'alineacion' => 'left',
                'color' => 'color_1',
                ])

                @include('partials.slider-post', ['p_elemento' => $posts])
            </div>

        </div>
    </div>
</div>

@endsection