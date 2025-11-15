<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                'name' => 'Administrador del Sistema',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'activo' => true,
            ],
            [
                'name' => 'Vendedor 1',
                'email' => 'vendedor1@example.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'activo' => true,
            ],
            [
                'name' => 'Vendedor 2',
                'email' => 'vendedor2@example.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'activo' => true,
            ],
        ];

        foreach ($usuarios as $usuario) {
            User::create($usuario);
        }

        for ($i = 1; $i <= 5; $i++) {

            $user = User::create([
                'name' => "Cliente $i",
                'email' => "cliente$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'cliente',
                'activo' => true,
            ]);

            Cliente::create([
                'user_id' => $user->id,
                'cuc' => "CUC00$i",
                'codigo_cliente' => "CL00$i",
                'nombre_completo' => "Cliente de Prueba $i",
                'dni' => "1234567$i",
                'telefono_principal' => "99988877$i",
                'telefono_alternativo' => null,
                'correo_electronico' => "cliente$i@example.com",
            ]);
        }
    }
}
