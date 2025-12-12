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
            'evidencia-ver',
            'evidencia-crear',
            'evidencia-editar',
            'evidencia-eliminar',
        ];

        foreach ($permisos as $permiso) {
            Permission::firstOrCreate(['name' => $permiso]);
        }

        // ----------------------------------------
        // 2. CREAR ROLES
        // ----------------------------------------
        $roles = [
            'super-admin',
            'supervisor gestor',
            'gestor',
            'cliente',
            'socio',
        ];

        foreach ($roles as $rol) {
            Role::firstOrCreate(['name' => $rol]);
        }

        // Obtener instancias
        $superAdmin = Role::findByName('super-admin');
        $supervisorGestor = Role::findByName('supervisor gestor');
        $gestor = Role::findByName('gestor');
        $cliente = Role::findByName('cliente');
        $socio = Role::findByName('socio');

        // ----------------------------------------
        // 3. ASIGNACIÓN DE PERMISOS POR ROL
        // ----------------------------------------
        $superAdmin->syncPermissions(Permission::all());

        $supervisorGestor->givePermissionTo([
            'evidencia-ver',
            'evidencia-crear',
            'evidencia-editar',
            'evidencia-eliminar',
        ]);

        $gestor->givePermissionTo([
            'evidencia-ver',
            'evidencia-crear',
            'evidencia-editar',
        ]);
    }
}
