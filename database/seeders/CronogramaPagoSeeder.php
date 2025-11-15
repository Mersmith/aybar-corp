<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Venta;
use App\Models\CronogramaPago;
use Illuminate\Database\Seeder;

class CronogramaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ventas = Venta::all();

        foreach ($ventas as $venta) {

            $cuotas = rand(6, 24); // de 6 a 24 cuotas
            $valor_cuota = $venta->saldo_inicial / $cuotas;

            for ($i = 1; $i <= $cuotas; $i++) {
                CronogramaPago::create([
                    'venta_id' => $venta->id,
                    'numero_cuota' => $i,
                    'fecha_vencimiento' => now()->addMonths($i),
                    'valor_cuota' => $valor_cuota,
                    'estado' => 'pendiente'
                ]);
            }
        }
    }
}
