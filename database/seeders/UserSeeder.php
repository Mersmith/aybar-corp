<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 2; $i++) {
            $user_super_admin = User::factory()->create([
                'name' => "Super Admin $i",
                'email' => "super_admin$i@aybarcorp.com",
                'password' => Hash::make('123456'),
                'rol' => 'admin',
            ]);

            $user_super_admin->assignRole('super-admin');
        }

        for ($i = 1; $i <= 2; $i++) {
            $supervisor_gestor = User::factory()->create([
                'name' => "Supervisor Gestor $i",
                'email' => "supervisor_gestor$i@aybarcorp.com",
                'password' => Hash::make('123456'),
                'rol' => 'admin',
            ]);

            $supervisor_gestor->assignRole('supervisor gestor');
        }

        for ($i = 1; $i <= 8; $i++) {
            $gestor = User::factory()->create([
                'name' => "Gestor $i",
                'email' => "gestor$i@aybarcorp.com",
                'password' => Hash::make('123456'),
                'rol' => 'admin',
            ]);

            $gestor->assignRole('gestor');
        }

        for ($i = 1; $i <= 2; $i++) {
            $cliente = User::create([
                'name' => "Cliente $i",
                'email' => "cliente$i@aybarcorp.com",
                'password' => Hash::make('123456'),
                'rol' => 'cliente',
            ]);

            $cliente->assignRole('cliente');

            Cliente::factory()->create([
                'user_id' => $cliente->id,
                'email' => $cliente->email,
                'nombre' => $cliente->name,
                'nombre_completo' => $cliente->name,
            ]);
        }

        for ($i = 1; $i <= 2; $i++) {
            $socio = User::create([
                'name' => "Socio $i",
                'email' => "socio$i@aybarcorp.com",
                'password' => Hash::make('123456'),
                'rol' => 'socio',
            ]);

            $socio->assignRole('socio');
        }
    }
}
