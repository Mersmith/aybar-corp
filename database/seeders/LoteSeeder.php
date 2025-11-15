<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Lote;
use App\Models\Proyecto;
use Illuminate\Database\Seeder;

class LoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyectos = Proyecto::all();

        foreach ($proyectos as $proyecto) {
            for ($i = 1; $i <= 20; $i++) {
                Lote::create([
                    'proyecto_id' => $proyecto->id,
                    'numero_lote' => $i,
                    'manzana' => 'MZ-' . rand(1, 10),
                    'area' => rand(90, 300),
                ]);
            }
        }
    }
}
