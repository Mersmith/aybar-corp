@extends('layouts.web.layout-web')

@section('titulo', 'Contacto')

@section('contenido')

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">

        <div class="g_contenedor_columna">
            @include('partials.titulo-encabezado', [
            'titulo' => 'ESTAMOS AQUÍ<br><span>PARA AYUDARTE</span>',
            'alineacion' => 'center',
            'color' => 'color_1',
            ])

            <div class="contacto_grid">
                <!-- INFORMACIÓN -->
                <div class="contacto_info">
                    <p><i class="fa-solid fa-phone"></i> <strong>Celular:</strong><br> +51 924218321</p>
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        <strong>Email:</strong><br>
                        libro@martin.com<br>
                        sumate@martin.com
                    </p>
                    <p><i class="fa-solid fa-location-dot"></i> <strong>Dirección del Local:</strong><br> El Agustino
                    </p>

                    <div class="contacto_mapa">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9716.288138101843!2d-77.0062851973512!3d-11.977228351345385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c56a978fd8bf%3A0x3d67f37d51e1d7c0!2sSan%20Juan%20de%20Lurigancho!5e1!3m2!1ses!2spe!4v1757009478938!5m2!1ses!2spe"
                            allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- FORMULARIO -->
                <div class="contacto_formulario">
                    @livewire('web.contacto.formulario-contacto-livewire')
                </div>
            </div>
        </div>

    </div>
</div>
@endsection