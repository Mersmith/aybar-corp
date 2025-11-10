@extends('layouts.web.layout-web')

@section('titulo', 'Aybar Corp')

@section('contenido')

@include('bloques.bloque-5', ['p_elemento' => $bloque5_1])

<div class="r_centrar_pagina">
    <div class="r_pading_pagina r_gap_pagina">
        <div class="r_contenedor_columna">
            @include('bloques.bloque-6', ['p_elemento' => $bloque6_1])

            @include('bloques.bloque-2', ['p_elemento' => $bloque2_1])

            @include('bloques.bloque-2', ['p_elemento' => $bloque2_2])

            @include('bloques.bloque-2', ['p_elemento' => $bloque2_3])

            @include('bloques.bloque-7', ['p_elemento' => $bloque7_1])
        </div>
    </div>
</div>

<div class="r_margin_top_70">
    @include('bloques.bloque-4', ['p_elemento' => $bloque4_1])
</div>

@endsection