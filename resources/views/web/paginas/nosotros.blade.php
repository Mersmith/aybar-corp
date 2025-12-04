@extends('layouts.web.layout-web')

@section('titulo', 'Aybar Corp')

@section('contenido')

@include('bloques.bloque-5', ['p_elemento' => $bloque5_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">
        <div class="g_gap_pagina">
            @include('bloques.bloque-6', ['p_elemento' => $bloque6_1])

            @include('bloques.bloque-2', ['p_elemento' => $bloque2_1])

            @include('bloques.bloque-2', ['p_elemento' => $bloque2_2])

            @include('bloques.bloque-2', ['p_elemento' => $bloque2_3])

        </div>
    </div>

    <div class="g_pading_pagina">
        <div class="g_gap_pagina">
            @include('bloques.bloque-7', ['p_elemento' => $bloque7_1])
        </div>
    </div>
</div>

<div class="r_margin_top_40">
    @include('bloques.bloque-4', ['p_elemento' => $bloque4_1])
</div>

@endsection