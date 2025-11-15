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
        $nombre = $this->faker->sentence(6);
        $contenido = '<p>Primero, agradezco la fe que muchos peruanos</p>';
        return [
            //'nombre' => $nombre,
            //'slug' => Str::slug($nombre),
            'contenido' => $contenido,
            'imagen' => 'http://127.0.0.1:8000/assets/imagenes/proyectos/proyecto-1.jpg',
            'publicado_en' => now(),
            'activo' => true,
            //'meta_title' => $nombre,
            'meta_description' => $this->faker->sentence(1),
            'meta_image' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
        ];
    }
}
