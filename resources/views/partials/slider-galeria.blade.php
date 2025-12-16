@if (!empty($galeria) && count($galeria) > 0)

<div class="partials_contenedor_slider_galeria">
    <div class="swiper SwiperSliderGaleria-{{ $id }}">
        <div class="swiper-wrapper">

            @foreach ($galeria as $item)
                @if (!empty($item['imagen']))
                    <div class="swiper-slide">
                        <div class="post_imagen_contenedor">
                            <img src="{{ $item['imagen'] }}" alt="">
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>

<script>
    new Swiper('.SwiperSliderGaleria-{{ $id }}', {
        slidesPerView: 3.5,
        spaceBetween: 20,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        loop: true,
        grabCursor: true,
        breakpoints: {
            1024: { slidesPerView: 3.5 },
            768: { slidesPerView: 2.5 },
            0: { slidesPerView: 1.2 }
        }
    });
</script>

@endif
