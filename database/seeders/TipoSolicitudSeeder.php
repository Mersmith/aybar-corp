<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoSolicitud;

class TipoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoSolicitud::insert([
            ['nombre' => 'Reclamo', 'activo' => true],
            ['nombre' => 'Consulta', 'activo' => true],
            ['nombre' => 'Falla técnica', 'activo' => true],
            ['nombre' => 'Solicitud de información', 'activo' => true],
            ['nombre' => 'Garantía', 'activo' => true],
            ['nombre' => 'Queja', 'activo' => true],
            ['nombre' => 'Seguimiento de pedido', 'activo' => true],
        ]);
    }
}
