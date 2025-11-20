@extends('layouts.cliente.layout-cliente')

@section('titulo', 'Dirección Cliente')

@section('contenidoCliente')
    <div class="r_centrar_pagina">
        <div class="r_pading_pagina">
            <div class="r_gap_pagina r_margin_top_40 r_margin_bottom_40">
                @livewire('cliente.direccion.direccion-todo-livewire')
            </div>
        </div>
    </div>
@endsection
