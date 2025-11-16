<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Reprogramacion;
use App\Models\CronogramaPago;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReprogramacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuotas = CronogramaPago::where('estado', 'pendiente')->get();
        $usuarios = User::all();

        foreach ($cuotas as $cuota) {

            if (rand(0, 1)) {

                // ------- NUEVOS VALORES -------
                $nueva_fecha = now()->addMonths(rand(1, 3));
                $nuevo_monto = $cuota->valor_cuota + 50;

                // ------- GUARDAR HISTORIAL -------
                Reprogramacion::create([
                    'cronograma_id'  => $cuota->id,
                    'numero_cuota'   => $cuota->numero_cuota,
                    'fecha_anterior' => $cuota->fecha_vencimiento,
                    'fecha_nueva'    => $nueva_fecha,
                    'monto_anterior' => $cuota->valor_cuota,
                    'monto_nuevo'    => $nuevo_monto,
                    'motivo'         => 'Reprogramación automática de prueba',
                    'usuario_id'     => rand(1, 3),
                ]);

                // ------- ACTUALIZAR LA CUOTA -------
                $cuota->update([
                    'fecha_vencimiento' => $nueva_fecha,
                    'valor_cuota'       => $nuevo_monto,
                    'estado'            => 'reprogramado',
                ]);
            }
        }
    }
}
