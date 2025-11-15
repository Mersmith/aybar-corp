<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Venta;
use App\Models\ReprogramacionGeneral;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\CronogramaPago;

class ReprogramacionGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ventas = Venta::all();
        $usuarios = User::all();

        foreach ($ventas as $venta) {

            // Solo algunas ventas serán reprogramadas
            if (rand(0, 1) === 0) {
                continue;
            }

            // --- NUEVOS VALORES ---
            $nuevo_total = $venta->saldo_pendiente + 300;
            $nuevas_cuotas = rand(6, 18);
            $valor_cuota = round($nuevo_total / $nuevas_cuotas, 2);

            // --- Crear historial de reprogramación general ---
            ReprogramacionGeneral::create([
                'venta_id' => $venta->id,
                'saldo_anterior' => $venta->saldo_pendiente,
                'nuevo_total' => $nuevo_total,
                'nueva_cantidad_cuotas' => $nuevas_cuotas,
                'motivo' => 'Reprogramación general de prueba',
                'usuario_id' => rand(1, 3),
            ]);

            // --- Actualiza la venta ---
            $venta->update([
                'saldo_pendiente' => $nuevo_total,
                'estado' => 'reprogramada',
            ]);

            // --- Cerrar cronograma anterior ---
            CronogramaPago::where('venta_id', $venta->id)
                ->update([
                    'estado' => 'reprogramado'
                ]);

            // --- Crear nuevo cronograma ---
            $fecha = now()->addMonth();

            for ($i = 1; $i <= $nuevas_cuotas; $i++) {
                CronogramaPago::create([
                    'venta_id' => $venta->id,
                    'numero_cuota' => $i,
                    'fecha_vencimiento' => $fecha->copy(),
                    'valor_cuota' => $valor_cuota,
                    'monto_cuota_vencida' => 0,
                    'dias_vencimiento' => 0,
                    'penalidad' => 0,
                    'estado' => 'pendiente',
                    'monto_pagado_acumulado' => 0,
                ]);

                $fecha->addMonth();
            }
        }
    }
}
