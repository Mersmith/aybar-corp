@extends('layouts.cliente.layout-cliente')

@section('titulo', 'Lotes cliente')

@section('contenidoCliente')
<div class="g_centrar_pagina">
    <div class="r_pading_pagina">
        <div class="g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            @livewire('cliente.estado-cuenta.estado-cuenta-ver-livewire', ['id' => $id])
        </div>
    </div>
</div>
@endsection