<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cita;
use App\Models\User;
use App\Models\Sede;
use App\Models\MotivoCita;

class CitaSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();
        $clientes = User::where('role', 'cliente')->get();
        $sedes = Sede::all();
        $motivos = MotivoCita::where('activo', true)->get();

        if (!$admin || $clientes->isEmpty() || $sedes->isEmpty() || $motivos->isEmpty()) {
            return;
        }

        $estados = ['pendiente', 'confirmada', 'cancelada', 'rechazada'];
        $duraciones = [30, 45, 60, 90];

        for ($i = 1; $i <= 50; $i++) {

            $cliente = $clientes->random();
            $sede = $sedes->random();
            $motivo = $motivos->random();

            // Fecha aleatoria entre sept–dic 2025
            $fecha = fake()->dateTimeBetween('2025-09-01', '2025-12-31')->format('Y-m-d');

            // Hora aleatoria entre 08:00 y 18:00
            $horaInicio = fake()->time('H:i', '18:00');

            $duracion = $duraciones[array_rand($duraciones)];
            $horaFin = date('H:i', strtotime($horaInicio . " + {$duracion} minutes"));

            Cita::create([
                'usuario_solicita_id' => $admin->id,
                'usuario_recibe_id'   => $cliente->id,
                'sede_id'             => $sede->id,
                'motivo_cita_id'      => $motivo->id,
                'fecha'               => $fecha,
                'hora_inicio'         => $horaInicio,
                'hora_fin'            => $horaFin,
                'estado'              => $estados[array_rand($estados)],
            ]);
        }
    }
}
