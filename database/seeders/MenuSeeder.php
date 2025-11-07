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
            'nombre' => 'Inicio',
            'slug' => 'inicio',
            'url' => '/',
            'orden' => 1,
        ]);

        $nosotros = Menu::create([
            'nombre' => 'Nosotros',
            'slug' => '',
            'url' => '',
            'orden' => 2,
        ]);

        // Submenús de "Nosotros"
        Menu::create([
            'nombre' => 'Martin Caicho',
            'slug' => 'martin-caicho',
            'url' => '/martin-caicho',
            'parent_id' => $nosotros->id,
            'orden' => 1,
        ]);

        Menu::create([
            'nombre' => 'Empresario',
            'slug' => 'empresario',
            'url' => '/empresario',
            'parent_id' => $nosotros->id,
            'orden' => 2,
        ]);

        Menu::create([
            'nombre' => 'Autor',
            'slug' => 'autor',
            'url' => '/autor',
            'parent_id' => $nosotros->id,
            'orden' => 3,
        ]);

        Menu::create([
            'nombre' => 'Líder',
            'slug' => 'lider',
            'url' => '/lider',
            'parent_id' => $nosotros->id,
            'orden' => 3,
        ]);

        $posts = Menu::create([
            'nombre' => 'Posts',
            'slug' => '',
            'url' => '',
            'orden' => 3,
        ]);

        Menu::create([
            'nombre' => 'Blog',
            'slug' => 'blog',
            'url' => '/blog',
            'parent_id' => $posts->id,
            'orden' => 1,
        ]);

        Menu::create([
            'nombre' => 'Noticias',
            'slug' => 'noticias',
            'url' => '/noticias',
            'parent_id' => $posts->id,
            'orden' => 1,
        ]);

        $contacto = Menu::create([
            'nombre' => 'Contacto',
            'slug' => 'contacto',
            'url' => '/contacto',
            'orden' => 4,
        ]);
    }
}
