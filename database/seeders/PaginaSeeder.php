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
                'titulo' => 'Nosotros',
                'slug' => 'nosotros',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Proyectos',
                'slug' => 'grupo-proyecto',
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
