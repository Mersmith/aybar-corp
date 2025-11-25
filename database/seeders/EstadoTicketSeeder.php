<?php

namespace Database\Seeders;

use App\Models\EstadoTicket;
use Illuminate\Database\Seeder;

class EstadoTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoTicket::insert([
            ['nombre' => 'Abierto', 'activo' => true],
            ['nombre' => 'En Progreso', 'activo' => true],
            ['nombre' => 'Derivado', 'activo' => true],
            ['nombre' => 'En Espera Cliente', 'activo' => true],
            ['nombre' => 'En Espera Área', 'activo' => true],
            ['nombre' => 'Cerrado', 'activo' => true],
        ]);
    }
}
