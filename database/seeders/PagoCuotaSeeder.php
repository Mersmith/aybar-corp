<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PagoCuota;
use App\Models\CronogramaPago;
use App\Models\User;
use Illuminate\Database\Seeder;

class PagoCuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuotas = CronogramaPago::all();
        $usuarios = User::all();

        foreach ($cuotas as $cuota) {

            // 50% de probabilidades de que esta cuota esté pagada
            if (rand(0, 1)) {

                $monto = $cuota->valor_cuota;

                PagoCuota::create([
                    'cronograma_id' => $cuota->id,
                    'fecha_pago' => now()->subDays(rand(1, 90)),
                    'monto_pagado' => $monto,
                    'medio_pago' => 'transferencia',
                    'banco' => 'BCP',
                    'codigo_operacion' => 'OP-' . rand(10000, 99999),
                    'usuario_id' => $usuarios->random()->id
                ]);

                // actualizar cuota
                $cuota->update([
                    'estado' => 'pagado',
                    'monto_pagado_acumulado' => $monto,
                ]);
            }
        }
    }
}
