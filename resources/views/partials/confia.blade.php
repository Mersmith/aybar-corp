<div class="partials_confia">
    <img class="imagen" src="{{ asset('assets/imagenes/slider/sliders-computadora-3.jpg') }}" alt="">

    <div class="cuerpo">

        <div class="g_centrar_pagina">

            <div class="contenedor_contacto">
                <div class="contenedor_card">

                    @include('partials.titulo-encabezado', [
                        'titulo' => 'CONFÍA EN <br> <span>AYBAR CORP</span>',
                        'descripcion' => 'Construye un futuro sólido para tu familia
                                        invirtiendo en confianza.',
                    
                        'alineacion' => 'center',
                        'color' => 'color_1',
                    ])

                    <div class="confia_grid">
                        <div class="confia_grid_item">
                            <img src="{{ asset('assets/imagenes/iconos/icono-1.png') }}" alt="">
                            <span>Áreas Recreativas para disfrutar en Familia</span>
                        </div>

                        <div class="confia_grid_item">
                            <img src="{{ asset('assets/imagenes/iconos/icono-2.svg') }}" alt="">
                            <span>Áreas Recreativas para disfrutar en Familia</span>
                        </div>

                        <div class="confia_grid_item">
                            <img src="{{ asset('assets/imagenes/iconos/icono-3.svg') }}" alt="">
                            <span>Áreas Recreativas para disfrutar en Familia</span>
                        </div>

                        <div class="confia_grid_item">
                            <img src="{{ asset('assets/imagenes/iconos/icono-4.svg') }}" alt="">
                            <span>Áreas Recreativas para disfrutar en Familia</span>
                        </div>
                    </div>

                    <a href="" class="g_boton_personalizado amarillo">CONOCER MÁS</a>

                </div>
            </div>
        </div>
    </div>

</div>
