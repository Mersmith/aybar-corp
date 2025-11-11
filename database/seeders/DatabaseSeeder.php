<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PaginaSeeder::class,
            MenuSeeder::class,
            SeccionSeeder::class,
            BlogSeeder::class,
            TipoFormularioSeeder::class,
            FormularioPaginaContactoSeeder::class,
            FormularioLibroReclamacionSeeder::class,
            ProyectoSeeder::class,
        ]);
    }
}
