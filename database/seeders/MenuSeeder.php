<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inicio = Menu::create([
            'nombre' => 'INICIO',
            'slug' => 'inicio',
            'url' => '/',
            'orden' => 1,
        ]);

        $proyectos = Menu::create([
            'nombre' => 'PROYECTOS',
            'slug' => '',
            'url' => '',
            'orden' => 2,
        ]);

        // Submenús de "Proyectos"
        Menu::create([
            'nombre' => 'Proyecto 1',
            'slug' => 'martin-caicho',
            'url' => '/martin-caicho',
            'parent_id' => $proyectos->id,
            'orden' => 1,
        ]);

        Menu::create([
            'nombre' => 'Proyecto 2',
            'slug' => 'empresario',
            'url' => '/empresario',
            'parent_id' => $proyectos->id,
            'orden' => 2,
        ]);

        Menu::create([
            'nombre' => 'Proyecto 3',
            'slug' => 'autor',
            'url' => '/autor',
            'parent_id' => $proyectos->id,
            'orden' => 3,
        ]);

        Menu::create([
            'nombre' => 'Proyecto 4',
            'slug' => 'lider',
            'url' => '/lider',
            'parent_id' => $proyectos->id,
            'orden' => 3,
        ]);

        $nosotros = Menu::create([
            'nombre' => 'NOSOTROS',
            'slug' => 'contacto',
            'url' => '/contacto',
            'orden' => 4,
        ]);

        $publicaciones = Menu::create([
            'nombre' => 'PUBLICACIONES',
            'slug' => '',
            'url' => '',
            'orden' => 3,
        ]);

        Menu::create([
            'nombre' => 'Blog',
            'slug' => 'blog',
            'url' => '/blog',
            'parent_id' => $publicaciones->id,
            'orden' => 1,
        ]);

        Menu::create([
            'nombre' => 'Comunicados',
            'slug' => 'noticias',
            'url' => '/noticias',
            'parent_id' => $publicaciones->id,
            'orden' => 1,
        ]);
    }
}
