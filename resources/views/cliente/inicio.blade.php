@extends('layouts.web.layout-web')

@section('titulo', 'Inicio')

@section('contenido')


    <div class="r_centrar_pagina">
        <div class="r_pading_pagina">
            <div class="r_gap_pagina r_margin_top_40 r_margin_bottom_40">

                <h2>HOLA CLIENTE</h2>

                <form method="POST" action="{{ route('logout.cliente') }}">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
