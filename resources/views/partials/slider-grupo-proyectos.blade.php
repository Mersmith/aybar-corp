@if (!empty($p_elemento) && $p_elemento['proyectos']->isNotEmpty())

<div class="partials_contenedor_slider_grupo_proyectos">
    <!-- Swiper -->
    <div class="swiper SwiperSliderGrupoProyectos-{{ $p_elemento['id'] }}">
        <div class="swiper-wrapper">
            @foreach ($p_elemento['proyectos'] as $post)
            <div class="swiper-slide">
                <div class="post_imagen_contenedor">
                    <img src="{{ $post->imagen }}">
                    <div>
                        <p class="titulo">{{ $post->titulo }}</p>
                        <p class="subtitulo">{{ $post->subtitulo }}</p>
                    </div>
                    <a href="" class="g_boton_personalizado amarillo">VISITAR PROYECTO</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper('.SwiperSliderGrupoProyectos-{{ $p_elemento['id'] }}', {
            slidesPerView: 3.5,
            spaceBetween: 20,
            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            /*loop: {{ count($p_elemento['proyectos']) > 1 ? 'true' : 'false' }},*/
            grabCursor: true,

            breakpoints: {
                1024: {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                0: {
                    slidesPerView: 1.2,
                    spaceBetween: 20,
                }
            }
        });
</script>
@endif