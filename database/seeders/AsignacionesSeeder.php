<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\TipoSolicitud;
use App\Models\User;
use Illuminate\Database\Seeder;

class AsignacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = User::first(); // usuario_admin

        if (!$usuario) {
            return;
        }

        // Asignar todas las áreas
        $usuario->areas()->sync(Area::pluck('id'));
    }
}
