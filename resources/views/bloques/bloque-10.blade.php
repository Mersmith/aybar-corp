@if (!empty($p_elemento) && !empty($p_elemento->contenido))

@php
$p = $p_elemento->contenido;

$titulo = $p['titulo'] ?? '';
$titulo_descripcion = $p['titulo_descripcion'] ?? '';
$lista = $p['lista'] ?? [];
$slidesCount = count($lista);
$idSwiper = $p_elemento->id ?? 'default';
@endphp

@include('partials.titulo-encabezado', [
'titulo' => $titulo,
'descripcion' => $titulo_descripcion,
'alineacion' => 'center',
'color' => 'color_1',
])

@if (!empty($lista))
<div class="bloque_10">
    <div class="swiper SwiperSliderBloque10-{{ $idSwiper }}">
        <div class="swiper-wrapper">
            @foreach ($lista as $item)
            <div class="swiper-slide">
                <div class="contenedor_card">
                    @if (!empty($item['iframe']))
                    <div class="youtube_wrapper">
                        {!! str_replace('<iframe', '<iframe loading="lazy"' , $item['iframe']) !!} </div>
                            @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.SwiperSliderBloque10-{{ $idSwiper }}', {
        slidesPerView: 3,
        spaceBetween: 20,
        grabCursor: true,
        loop: {{ $slidesCount > 1 ? 'true' : 'false' }},
        autoplay: {{ $slidesCount > 1 ? '{ delay: 3500, disableOnInteraction: false }' : 'false' }},
        breakpoints: {
            1024: { slidesPerView: 3, spaceBetween: 20 },
            768: { slidesPerView: 2, spaceBetween: 20 },
            0: { slidesPerView: 1, spaceBetween: 20 },
        }
    });
});
    </script>
    @endif
    @endif