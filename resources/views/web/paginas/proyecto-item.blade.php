@extends('layouts.web.layout-web')

@section('titulo', $proyecto->nombre ?: '')

@php
    $secciones = $proyecto->secciones ?? [];
@endphp

@section('contenido')


    @if (!empty($secciones['banner_imagen']))
        <section class="proyecto_banner">
            <img src="{{ $secciones['banner_imagen'] }}" alt="{{ $proyecto->nombre }}">
        </section>
    @endif

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina">
            <div class="proyecto_cabecera">
                @if (!empty($secciones['precio']) && (!empty($secciones['precio']['texto']) || !empty($secciones['precio']['monto'])))
                    <section class="precio">
                        @if (!empty($secciones['precio']['texto']))
                            <h3>{{ $secciones['precio']['texto'] }}</h3>
                        @endif

                        @if (!empty($secciones['precio']['monto']))
                            <p>{{ $secciones['precio']['monto'] }}</p>
                        @endif
                    </section>
                @endif

                @if (!empty($secciones['aviso']) && (!empty($secciones['aviso']['texto_1']) || !empty($secciones['aviso']['texto_2'])))
                    <section class="aviso">
                        @if (!empty($secciones['aviso']['texto_1']))
                            <h3>{{ $secciones['aviso']['texto_1'] }}</h3>
                        @endif

                        @if (!empty($secciones['aviso']['texto_2']))
                            <p>{{ $secciones['aviso']['texto_2'] }}</p>
                        @endif
                    </section>
                @endif
            </div>
        </div>
    </div>

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            @include('partials.titulo-encabezado', [
                'titulo' => 'UBICACIÓN DE <br> <span>' . $proyecto->nombre . '  </span>',
                'descripcion' => 'Contamos con la mejor zona para comprar tu lote, estamos ubicados en',
                'alineacion' => 'center',
                'color' => 'color_1',
            ])

            @if (!empty($secciones['iconos']) && count($secciones['iconos']) > 0)
                <section class="proyecto_grid">
                    @foreach ($secciones['iconos'] as $icono)
                        @if (!empty($icono['imagen']) || !empty($icono['texto']))
                            <div class="proyecto_grid_item">
                                @if (!empty($icono['imagen']))
                                    <img src="{{ $icono['imagen'] }}" alt="">
                                @endif

                                @if (!empty($icono['texto']))
                                    <p>{{ $icono['texto'] }}</p>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </section>
            @endif
        </div>
    </div>

    @if (!empty($secciones['imagen_mapa']))
        <section class="proyecto_banner_alto_auto">
            <img src="{{ $secciones['imagen_mapa'] }}" alt="{{ $proyecto->nombre }}">
        </section>
    @endif

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina g_margin_top_40 g_margin_bottom_40">

            @include('partials.titulo-encabezado', [
                'titulo' => 'OFREMECEMOS ',
                'alineacion' => 'center',
                'color' => 'color_1',
            ])

            @if (!empty($secciones['ofrecemos']) && count($secciones['ofrecemos']) > 0)
                <section class="proyecto_grid">
                    @foreach ($secciones['ofrecemos'] as $ofrece)
                        @if (!empty($ofrece['imagen']) || !empty($ofrece['texto']))
                            <div class="proyecto_grid_item">
                                @if (!empty($ofrece['imagen']))
                                    <img src="{{ $ofrece['imagen'] }}" alt="">
                                @endif

                                @if (!empty($ofrece['texto']))
                                    <p>{{ $ofrece['texto'] }}</p>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </section>
            @endif
        </div>
    </div>

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina g_margin_top_40 g_margin_bottom_40">
            @if (!empty($secciones['galeria']) && count($secciones['galeria']) > 0)
                @include('partials.slider-galeria', [
                    'galeria' => $secciones['galeria'],
                    'id' => $proyecto->id,
                ])
            @endif

            @if (!empty($secciones['videos_youtube']))
                @include('partials.slider-videos', [
                    'videos' => $secciones['videos_youtube'],
                    'id' => $proyecto->id,
                ])
            @endif

            {{--@if (!empty($secciones['turismo']) && count($secciones['turismo']) > 0)
                <section class="turismo">
                    @foreach ($secciones['turismo'] as $item)
                        @if (!empty($item['imagen']) || !empty($item['titulo']) || !empty($item['descripcion']))
                            <div class="turismo_item">
                                @if (!empty($item['imagen']))
                                    <img src="{{ $item['imagen'] }}" alt="">
                                @endif

                                @if (!empty($item['titulo']))
                                    <h3>{{ $item['titulo'] }}</h3>
                                @endif

                                @if (!empty($item['descripcion']))
                                    <p>{{ $item['descripcion'] }}</p>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </section>
            @endif--}}
        </div>
    </div>
@endsection
