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

        $nosotros = Menu::create([
            'nombre' => 'NOSOTROS',
            'slug' => 'nosotros',
            'url' => '/nosotros',
            'orden' => 2,
        ]);

        $proyectos = Menu::create([
            'nombre' => 'PROYECTOS',
            'slug' => 'proyectos',
            'url' => '/proyectos',
            'orden' => 3,
        ]);

        // Submenús de "Proyectos"
        /*Menu::create([
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
        ]);*/

        $blog = Menu::create([
            'nombre' => 'BLOG',
            'slug' => 'blog',
            'url' => '/blog',
            'orden' => 4,
        ]);
    }
}
