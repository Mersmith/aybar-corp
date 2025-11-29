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

        for ($i = 0; $i < 50; $i++) {

            $cliente = $clientes->random();
            $sede = $sedes->random();
            $motivo = $motivos->random();

            // Fecha random
            $start = fake()->dateTimeBetween('2025-09-01', '2025-12-31');

            // Hora random entre 8 AM – 6 PM
            $start->setTime(fake()->numberBetween(8, 17), fake()->numberBetween(0, 59));

            $duracion = $duraciones[array_rand($duraciones)];
            $end = (clone $start)->modify("+{$duracion} minutes");

            Cita::create([
                'usuario_solicita_id' => $admin->id,
                'usuario_recibe_id'   => $cliente->id,
                'sede_id'             => $sede->id,
                'motivo_cita_id'      => $motivo->id,
                'start_at'            => $start,
                'end_at'              => $end,
                'estado'              => $estados[array_rand($estados)],
            ]);
        }
    }
}
