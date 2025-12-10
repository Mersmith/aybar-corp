@extends('layouts.web.layout-web')

@section('titulo', 'Aybar Corp')

@section('contenido')

@include('bloques.bloque-5', ['p_elemento' => $bloque5_1])

<div class="g_centrar_pagina">

    <div class="g_pading_pagina">
        <div class="g_gap_pagina">
            @include('bloques.bloque-6', ['p_elemento' => $bloque6_1])

            @include('bloques.bloque-2', ['p_elemento' => $bloque2_1])
        </div>

        <div class="g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            @include('bloques.bloque-11', ['p_elemento' => $bloque11_1])
        </div>

        <div class="g_margin_top_40 g_margin_bottom_40">
            @include('bloques.bloque-7', ['p_elemento' => $bloque7_1])
        </div>
    </div>

</div>

@endsection