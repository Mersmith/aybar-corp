@extends('layouts.web.layout-web')

@section('titulo', $grupo_proyecto->nombre)

@section('contenido')

<div class="g_centrar_pagina">
    <div class="g_pading_pagina">

        <div class="g_gap_pagina">
            @include('partials.titulo-encabezado', [
            'titulo' => $grupo_proyecto->nombre,
            'color' => 'color_1',
            'alineacion' => 'center',
            ])

            <div class="partials_contenedor_grid_post">
                <div class="grid_post">
                    @foreach ($items as $item)
                    <div class="proyecto_card_contenedor">
                        <img src="{{ $item->imagen }}">
                        <div>
                            <p class="subtitulo">{{ $item->nombre }}</p>
                        </div>
                        {{--<a href="{{ route('proyecto.show', $item->slug) }}"
                            class="g_boton_personalizado amarillo">VISITAR PROYECTO</a>--}}
                    </div>
                    @endforeach
                </div>

                <div class="g_paginacion g_margin_bottom_40">
                    {{ $items->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection