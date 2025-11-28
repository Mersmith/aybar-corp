<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivoCitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('motivo_citas')->insert([
            [
                'nombre' => 'Asesoría',
                'activo' => true,
                'created_at' => now(),
            ],
            [
                'nombre' => 'Reclamo',
                'activo' => true,
                'created_at' => now(),
            ],
            [
                'nombre' => 'Revisión de documentos',
                'activo' => true,
                'created_at' => now(),
            ],
            [
                'nombre' => 'Reunión de avance',
                'activo' => true,
                'created_at' => now(),
            ],
            [
                'nombre' => 'Consulta general',
                'activo' => true,
                'created_at' => now(),
            ],
        ]);
    }
}
