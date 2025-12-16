@if (!empty($videos) && count($videos) > 0)

    <div class="partials_contenedor_slider_video">
        <div class="swiper SwiperSliderVideo-{{ $id }}">
            <div class="swiper-wrapper">

                @foreach ($videos as $item)
                    @if (!empty($item['iframe']))
                        <div class="swiper-slide">
                            <div class="contenedor_card">
                                <div class="youtube_wrapper">
                                    {!! str_replace('<iframe', '<iframe loading="lazy"', $item['iframe']) !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

    <script>
        new Swiper('.SwiperSliderVideo-{{ $id }}', {
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            loop: true,
            grabCursor: true,
            breakpoints: {
                1024: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 2
                },
                0: {
                    slidesPerView: 1.2
                }
            }
        });
    </script>

@endif
