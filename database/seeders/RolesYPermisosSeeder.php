<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesYPermisosSeeder extends Seeder
{
    public function run(): void
    {
        // ----------------------------------------
        // 1. LISTA DE PERMISOS DEL SISTEMA
        // ----------------------------------------
        $permisos = [
            'ver dashboard',
            'gestionar usuarios',
            'gestionar clientes',
            'gestionar socios',
            'gestionar marketing',
            'gestionar legal',
            'gestionar callcenter',
        ];

        foreach ($permisos as $permiso) {
            Permission::firstOrCreate(['name' => $permiso]);
        }

        // ----------------------------------------
        // 2. CREAR ROLES
        // ----------------------------------------
        $roles = [
            'super-admin',  // Tendrá todos los permisos
            'admin',
            'cliente',
            'socio',
            'call center',
            'marketing',
            'legal',
        ];

        foreach ($roles as $rol) {
            Role::firstOrCreate(['name' => $rol]);
        }

        // Obtener instancias
        $superAdmin = Role::findByName('super-admin');
        $admin = Role::findByName('admin');
        $cliente = Role::findByName('cliente');
        $socio = Role::findByName('socio');
        $callcenter = Role::findByName('call center');
        $marketing = Role::findByName('marketing');
        $legal = Role::findByName('legal');

        // ----------------------------------------
        // 3. ASIGNACIÓN DE PERMISOS POR ROL
        // ----------------------------------------

        // SUPER ADMIN → todos los permisos automáticamente
        $superAdmin->syncPermissions(Permission::all());

        // ADMIN
        $admin->givePermissionTo([
            'ver dashboard',
            'gestionar usuarios',
            'gestionar clientes',
            'gestionar socios',
            'gestionar callcenter',
            'gestionar marketing',
            'gestionar legal',
        ]);

        // CLIENTE
        $cliente->givePermissionTo([
            'ver dashboard',
        ]);

        // SOCIO
        $socio->givePermissionTo([
            'ver dashboard',
        ]);

        // CALL CENTER
        $callcenter->givePermissionTo([
            'gestionar callcenter',
            'ver dashboard',
        ]);

        // MARKETING
        $marketing->givePermissionTo([
            'gestionar marketing',
            'ver dashboard',
        ]);

        // LEGAL
        $legal->givePermissionTo([
            'gestionar legal',
            'ver dashboard',
        ]);
    }
}
