<?php

namespace Database\Seeders;

use App\Models\Pagina;
use Illuminate\Database\Seeder;

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
                'tipo' => 'personalizado',
                'titulo' => 'Contáctanos',
                'slug' => 'contacto',
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
                            'seccion_id' => 11,
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
                            'seccion_id' => 12,
                            'tipo' => 'bloque-9',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'tipo' => 'secciones',
                'titulo' => 'Tratamiento de Datos Personales',
                'slug' => 'tratamiento-de-datos-personales',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'seccion_id' => 13,
                            'tipo' => 'bloque-9',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'tipo' => 'secciones',
                'titulo' => 'Política de Comunicaciones Comerciales',
                'slug' => 'politica-de-comunicaciones-comerciales',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'seccion_id' => 14,
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
