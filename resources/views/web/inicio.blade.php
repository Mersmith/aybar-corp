@extends('layouts.web.layout-web')

@section('titulo', 'Inicio')

@section('contenido')

@include('bloques.bloque-1', ['p_elemento' => $bloque1_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            @include('bloques.bloque-10', ['p_elemento' => $bloque10_1])
        </div>
    </div>
</div>

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            @include('bloques.bloque-11', ['p_elemento' => $bloque11_1])
        </div>
    </div>
</div>

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            @include('partials.titulo-encabezado', [
            'titulo' => 'DESCUBRE <br><span> NUESTROS PROYECTOS</span>',
            'alineacion' => 'center',
            'color' => 'color_1',
            ])

            @include('partials.slider-grupo-proyectos', ['p_elemento' => $proyectos])
        </div>
    </div>
</div>

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina">
            @include('bloques.bloque-8', ['p_elemento' => $bloque8_1])
        </div>
    </div>
</div>

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            <div>
                @include('partials.titulo-encabezado', [
                'titulo' => 'BLOG',
                'alineacion' => 'left',
                'color' => 'color_1',
                ])

                @include('partials.slider-post', ['p_elemento' => $posts])
            </div>
        </div>
    </div>
</div>

@endsection