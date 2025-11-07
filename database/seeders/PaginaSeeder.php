<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pagina;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paginas = [
            [
                'tipo' => 'personalizado',
                'titulo' => 'Inicio',
                'slug' => '/',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Martin Caicho',
                'slug' => 'martin-caicho',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Blog',
                'slug' => 'blog',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Blog - Item',
                'slug' => 'blog/',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Contacto',
                'slug' => 'contacto',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Perú Tierra de Incautos',
                'slug' => 'peru-tierra-de-incautos',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'secciones',
                'titulo' => 'Terminos y Condiciones',
                'slug' => 'terminos-y-condiciones',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'seccion_id' => 18,
                            'tipo' => 'bloque-9',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'tipo' => 'secciones',
                'titulo' => 'Políticas de Privacidad',
                'slug' => 'politicas-de-privacidad',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'seccion_id' => 19,
                            'tipo' => 'bloque-9',
                        ],
                    ],
                ],
                'activo' => true,
            ],
        ];

        foreach ($paginas as $pagina) {
            Pagina::create($pagina);
        }
    }
}
