@extends('layouts.web.layout-web')

@section('titulo', $proyecto->nombre ?: '')

@php
    $secciones = $proyecto->secciones ?? [];
@endphp

@section('contenido')
    <div class="g_centrar_pagina">
        <div class="g_pading_pagina">

            @if (!empty($secciones['banner_imagen']))
                <section class="banner">
                    <img src="{{ $secciones['banner_imagen'] }}" alt="{{ $proyecto->nombre }}">
                </section>
            @endif

            @if (!empty($secciones['banner_youtube']))
                <div class="video">
                    {!! $secciones['banner_youtube'] !!}
                </div>
            @endif


            @if (!empty($secciones['precio']) && (!empty($secciones['precio']['texto']) || !empty($secciones['precio']['monto'])))
                <section class="precio">
                    @if (!empty($secciones['precio']['texto']))
                        <p>{{ $secciones['precio']['texto'] }}</p>
                    @endif

                    @if (!empty($secciones['precio']['monto']))
                        <strong>{{ $secciones['precio']['monto'] }}</strong>
                    @endif
                </section>
            @endif

            @if (!empty($secciones['aviso']) && (!empty($secciones['aviso']['texto_1']) || !empty($secciones['aviso']['texto_2'])))
                <section class="aviso">
                    @if (!empty($secciones['aviso']['texto_1']))
                        <p>{{ $secciones['aviso']['texto_1'] }}</p>
                    @endif

                    @if (!empty($secciones['aviso']['texto_2']))
                        <strong>{{ $secciones['aviso']['texto_2'] }}</strong>
                    @endif
                </section>
            @endif

            @if (!empty($secciones['iconos']) && count($secciones['iconos']) > 0)
                <section class="iconos">
                    <div class="iconos_grid">
                        @foreach ($secciones['iconos'] as $icono)
                            @if (!empty($icono['imagen']) || !empty($icono['texto']))
                                <div class="icono_item">
                                    @if (!empty($icono['imagen']))
                                        <img src="{{ $icono['imagen'] }}" alt="">
                                    @endif

                                    @if (!empty($icono['texto']))
                                        <p>{{ $icono['texto'] }}</p>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                </section>
            @endif

            @if (!empty($secciones['imagen_mapa']))
                <section class="banner">
                    <img src="{{ $secciones['imagen_mapa'] }}" alt="{{ $proyecto->nombre }}">
                </section>
            @endif

            @if (!empty($secciones['ofrecemos']) && count($secciones['ofrecemos']) > 0)
                <section class="iconos">
                    <div class="iconos_grid">
                        @foreach ($secciones['ofrecemos'] as $ofrece)
                            @if (!empty($ofrece['imagen']) || !empty($ofrece['texto']))
                                <div class="icono_item">
                                    @if (!empty($ofrece['imagen']))
                                        <img src="{{ $ofrece['imagen'] }}" alt="">
                                    @endif

                                    @if (!empty($ofrece['texto']))
                                        <p>{{ $ofrece['texto'] }}</p>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                </section>
            @endif

            @if (!empty($secciones['galeria']) && count($secciones['galeria']) > 0)
                <section class="galeria">
                    @foreach ($secciones['galeria'] as $item)
                        @if (!empty($item['imagen']))
                            <img src="{{ $item['imagen'] }}" alt="">
                        @endif
                    @endforeach
                </section>
            @endif

            @if (!empty($secciones['videos_youtube']))
                <section class="videos">
                    @foreach ($secciones['videos_youtube'] as $video)
                        @if (!empty($video['iframe']))
                            <div class="video">
                                {!! $video['iframe'] !!}
                            </div>
                        @endif
                    @endforeach
                </section>
            @endif


            @if (!empty($secciones['turismo']) && count($secciones['turismo']) > 0)
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
            @endif


        </div>
    </div>
@endsection
