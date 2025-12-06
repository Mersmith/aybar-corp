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
        $user_super_admin = User::create([
            'name' => "Super Admin",
            'email' => "super@admin.com",
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]);

        $user_super_admin->assignRole('super-admin');

        for ($i = 1; $i <= 2; $i++) {
            $admin = User::factory()->create([
                'name' => "Admin $i",
                'email' => "admin$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ]);

            $admin->assignRole('admin');
        }

        for ($i = 1; $i <= 2; $i++) {
            $cliente = User::create([
                'name' => "Cliente $i",
                'email' => "cliente$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'cliente',
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
                'email' => "socio$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'socio',
            ]);

            $socio->assignRole('socio');
        }
    }
}
