<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $banner_imagen = asset('assets/imagenes/banner/banner-1.jpg');

        $banner_youtube = '<iframe width="560" height="315"
            src="https://www.youtube.com/embed/rdxrSIrZISE"
            title="YouTube video player" frameborder="0"
            allowfullscreen></iframe>';

        $precio = [
            'texto' => 'SEPARA TU LOTE DESDE',
            'monto' => 'S/ 1,500',
        ];

        $aviso = [
            'texto_1' => 'SEPARA TU LOTE EN',
            'texto_2' => 'PREVENTA',
        ];

        $iconos = [
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'A 10 min. del Óvalo de Cieneguilla',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'Terrenos desde 160 m2.',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'A 10 min. del Óvalo de Cieneguilla',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'Terrenos desde 160 m2.',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'A 10 min. del Óvalo de Cieneguilla',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'Terrenos desde 160 m2.',
            ],
        ];

        $imagen_mapa = asset('assets/imagenes/mapa/mapa-1.png');

        $ofrecemos = [
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'A 10 min. del Óvalo de Cieneguilla',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'Terrenos desde 160 m2.',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'A 10 min. del Óvalo de Cieneguilla',
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagenes/iconos/icono-6.svg'),
                'texto' => 'Terrenos desde 160 m2.',
            ],
        ];

        $galeria = [
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagen/default.jpg'),
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagen/default.jpg'),
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagen/default.jpg'),
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagen/default.jpg'),
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagen/default.jpg'),
            ],
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagen/default.jpg'),
            ],
        ];

        $videos_youtube = [
            [
                'id' => uniqid(),
                'iframe' => '<iframe width="560" height="315"
                src="https://www.youtube.com/embed/rdxrSIrZISE"
                title="YouTube video player" frameborder="0"
                allowfullscreen></iframe>',
            ],
            [
                'id' => uniqid(),
                'iframe' => '<iframe width="560" height="315"
                src="https://www.youtube.com/embed/rdxrSIrZISE"
                title="YouTube video player" frameborder="0"
                allowfullscreen></iframe>',
            ],
            [
                'id' => uniqid(),
                'iframe' => '<iframe width="560" height="315"
                src="https://www.youtube.com/embed/rdxrSIrZISE"
                title="YouTube video player" frameborder="0"
                allowfullscreen></iframe>',
            ],
            [
                'id' => uniqid(),
                'iframe' => '<iframe width="560" height="315"
                src="https://www.youtube.com/embed/rdxrSIrZISE"
                title="YouTube video player" frameborder="0"
                allowfullscreen></iframe>',
            ],
            [
                'id' => uniqid(),
                'iframe' => '<iframe width="560" height="315"
                src="https://www.youtube.com/embed/rdxrSIrZISE"
                title="YouTube video player" frameborder="0"
                allowfullscreen></iframe>',
            ],
        ];

        $turismo = [
            [
                'id' => uniqid(),
                'imagen' => asset('assets/imagen/default.jpg'),
                'titulo' => 'Naturaleza',
                'descripcion' => 'Zona turística cercana al proyecto',
            ],
        ];

        $secciones = [
            'banner_imagen' => $banner_imagen,
            'banner_youtube' => $banner_youtube,
            'precio' => $precio,
            'aviso' => $aviso,
            'iconos' => $iconos,
            'imagen_mapa' => $imagen_mapa,
            'ofrecemos' => $ofrecemos,
            'galeria' => $galeria,
            'videos_youtube' => $videos_youtube,
            'turismo' => $turismo,
        ];

        $nombre = $this->faker->sentence(6);
        $contenido = '<p>Primero, agradezco la fe que muchos peruanos</p>';
        return [
            //'nombre' => $nombre,
            //'slug' => Str::slug($nombre),
            'contenido' => $contenido,
            'secciones' => $secciones,
            'imagen' => 'http://127.0.0.1:8000/assets/imagenes/proyectos/proyecto-1.jpg',
            'publicado_en' => now(),
            'activo' => true,
            //'meta_title' => $nombre,
            'meta_description' => $this->faker->sentence(1),
            'meta_image' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
        ];
    }
}
