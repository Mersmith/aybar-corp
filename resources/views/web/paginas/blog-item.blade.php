@extends('layouts.web.layout-web')

@section('contenido')
<div class="r_contenedor_pagina">
    <div class="r_centrar_pagina">
        <div class="r_pading_pagina r_gap_pagina contenedor_post">

            <div class="grid">

                <!-- COLUMNA 1: Post principal -->
                <div class="grid_1">
                    <article>

                        <!-- Título -->
                        <h1 class="titulo">{{ $post->titulo }}</h1>

                        <!-- AUTOR -->
                        <a class="contenedor_autor" href=" ">

                            <div class="imagen">

                                <img src="{{ asset('assets/imagen/default.jpg') }}">

                            </div>

                            <div class="datos">
                                <p> Nombre </p>
                                <span> Cargo</span>
                            </div>
                        </a>

                        <!-- FECHA -->
                        <div class="fecha">
                            <i class="fa-solid fa-clock"></i>
                            @php
                            use Carbon\Carbon;
                            setlocale(LC_TIME, 'es_ES.UTF-8'); // Establece español
                            $fecha = Carbon::parse($post->created_at)->translatedFormat('d M Y');
                            @endphp

                            <span>{{ $fecha }}</span>
                        </div>

                        @php
                        // Reemplaza todos los <oembed> por <iframe>
                                $contenido = preg_replace_callback(
                                '/<oembed url="([^" ]+)">
                                    <\/oembed>/i',
                                        function ($matches) {
                                        $url = $matches[1];

                                        // Extraer el ID del video de YouTube
                                        if (preg_match('/(?:v=|\/)([a-zA-Z0-9_-]{11})/', $url, $id)) {
                                        $videoId = $id[1];
                                        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' .
                                                $videoId .
                                                '" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>';
                                        }

                                        return '';
                                        },
                                        $post->contenido,
                                        );
                                        @endphp

                                        <div class="contenido_post">
                                            {!! $contenido !!}
                                        </div>

                    </article>

                    @include('partials.compartir-redes', [
                    'url' => url()->current(),
                    'title' => $post->titulo ?? 'VotaXmi',
                    'description' =>
                    $post->meta_description ?? 'Participa y apoya a tu candidato favorito.',
                    'image' => $post->imagen ? url($post->imagen) : asset('assets/imagen/default.jpg'),
                    ])
                </div>

                <!-- COLUMNA 2: Sidebar o contenido adicional -->
                <div class="grid_2">
                    @if ($otrosPosts->count())
                    <div class="contenedor_lista_post">
                        @foreach ($otrosPosts as $post)
                        <div class="post_imagen_contenedor">
                            <a href="{{ route('blog.show', $post->slug) }}">
                                <img src="{{ $post->imagen }}">
                                <p class="titulo">{{ $post->meta_title }}</p>
                                <p class="fecha">{{ $post->created_at->format('d M Y') }}</p>
                                <p class="descripcion">{{ $post->meta_description }}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <!-- links de paginación -->
                    <div class="g_paginacion">
                        {{ $otrosPosts->links('vendor.pagination.default') }}
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection