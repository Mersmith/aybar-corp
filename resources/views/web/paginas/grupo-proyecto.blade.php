@extends('layouts.web.layout-web')

@section('titulo', 'Grupo proyectos')

@section('contenido')

    @include('bloques.bloque-5', ['p_elemento' => $bloque5_1])

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina">

            <div class="g_gap_pagina">
                @include('partials.titulo-encabezado', [
                    'titulo' => 'UBICA TU <br><span>PRÓXIMO HOGAR</span>',
                    'descripcion' =>
                        'Descubre el lugar ideal para tu próximo hogar. Nuestros proyectos están estratégicamente ubicados, rodeados de oportunidades y naturaleza, para construir el futuro que mereces.',
                    'color' => 'color_1',
                    'alineacion' => 'center',
                ])

                <div class="partials_contenedor_grid_post">
                    <div class="grid_post">
                        @foreach ($items as $item)
                            <div class="proyecto_card_contenedor">
                                <img src="{{ $item->imagen }}">
                                <div>
                                    <p class="titulo">{{ $item->titulo }}</p>
                                    <p class="subtitulo">{{ $item->subtitulo }}</p>
                                </div>
                                <a href="{{ route('grupo-proyecto.show', $item->slug) }}" class="g_boton_personalizado amarillo">VISITAR PROYECTO</a>
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
