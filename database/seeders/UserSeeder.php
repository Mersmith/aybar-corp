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
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Admin $i",
                'email' => "admin$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Cliente $i",
                'email' => "cliente$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'cliente',
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Asesor $i",
                'email' => "asesor$i@example.com",
                'password' => Hash::make('123456'),
                'role' => 'asesor',
            ]);
        }
    }
}
