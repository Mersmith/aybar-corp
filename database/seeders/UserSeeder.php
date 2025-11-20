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
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Admin $i",
                'email' => "admin$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            $cliente = User::create([
                'name' => "Cliente $i",
                'email' => "cliente$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'cliente',
            ]);

            Cliente::factory()->create([
                'user_id' => $cliente->id,
                'email' => $cliente->email,
                'nombre' => $cliente->name,
                'nombre_completo' => $cliente->name,
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Socio $i",
                'email' => "socio$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'socio',
            ]);
        }
    }
}
