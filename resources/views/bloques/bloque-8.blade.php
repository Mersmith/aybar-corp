@if (!empty($p_elemento) && !empty($p_elemento->contenido))

@php
$p = $p_elemento->contenido;

$titulo = $p['titulo'];
$titulo_descripcion = $p['titulo_descripcion'];
$lista = $p['lista'] ?? [];

$slidesCount = count($lista);
@endphp

@include('partials.encabezado', [
'titulo' => $titulo,
'descripcion' => $titulo_descripcion,
])

@if (!empty($lista) && is_array($lista))
<div class="bloque_8">
    <div class="swiper SwiperSliderTestimonios-{{ $p->id ?? 'default' }}">
        <div class="swiper-wrapper">
            @foreach ($lista as $item)
            <div class="swiper-slide">
                <div class="testimonio_card">
                    @if (!empty($item['imagen']))
                    <div class="testimonio_foto">
                        <img src="{{ $item['imagen'] }}" alt="{{ $item['imagen_seo'] }}">
                    </div>
                    @endif

                    @if (!empty($item['descripcion']))
                    <p class="testimonio_comentario">"{{ $item['descripcion'] }}"</p>
                    @endif

                    @if (!empty($item['titulo']))
                    <p class="testimonio_nombre">{{ $item['titulo']}}</p>
                    @endif

                    @if (!empty($item['subtitulo']))
                    <p class="testimonio_cargo">{{ $item['subtitulo'] }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    (function() {
            const slidesCount = {{ $slidesCount }};
            const selector = '.SwiperSliderTestimonios-{{ $p->id ?? 'default' }}';

            new Swiper(selector, {
                slidesPerView: 3.5,
                spaceBetween: 20,
                autoplay: slidesCount > 1 ? {
                    delay: 3500,
                    disableOnInteraction: false,
                } : false,
                loop: slidesCount > 4, // 👈 solo hace loop si hay más de 4 slides
                grabCursor: slidesCount > 1,

                breakpoints: {
                    1024: {
                        slidesPerView: Math.min(3.5, slidesCount),
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: Math.min(2.5, slidesCount),
                        spaceBetween: 20,
                    },
                    0: {
                        slidesPerView: Math.min(1.2, slidesCount),
                        spaceBetween: 20,
                    },
                }
            });
        })();
</script>

@endif
@endif