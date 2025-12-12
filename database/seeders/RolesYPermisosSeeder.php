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
            'estado-evidencia-pago-ver',
            'estado-evidencia-pago-crear',
            'estado-evidencia-pago-editar',
            'estado-evidencia-pago-eliminar',
            'evidencia-pago-ver',
            'evidencia-pago-crear',
            'evidencia-pago-editar',
            'evidencia-pago-eliminar',
            'evidencia-pago-validar',
            'tipo-solicitud-ver',
            'tipo-solicitud-crear',
            'tipo-solicitud-editar',
            'tipo-solicitud-eliminar',
            'prioridad-ticket-ver',
            'prioridad-ticket-crear',
            'prioridad-ticket-editar',
            'prioridad-ticket-eliminar',
            'estado-ticket-ver',
            'estado-ticket-crear',
            'estado-ticket-editar',
            'estado-ticket-eliminar',
            'canal-ver',
            'canal-crear',
            'canal-editar',
            'canal-eliminar',
            'ticket-ver',
            'ticket-crear',
            'ticket-editar',
            'ticket-eliminar',
            'ticket-reporte-ver',
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
            'supervisor atc',
            'atc',
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
        $supervisorAtc = Role::findByName('supervisor atc');
        $atc = Role::findByName('atc');
        $cliente = Role::findByName('cliente');
        $socio = Role::findByName('socio');

        // ----------------------------------------
        // 3. ASIGNACIÓN DE PERMISOS POR ROL
        // ----------------------------------------
        $superAdmin->syncPermissions(Permission::all());

        $supervisorGestor->givePermissionTo([
            'estado-evidencia-pago-ver',
            'estado-evidencia-pago-crear',
            'estado-evidencia-pago-editar',
            'estado-evidencia-pago-eliminar',
            'evidencia-pago-eliminar',
            'evidencia-pago-validar',
        ]);

        $gestor->givePermissionTo([
            'evidencia-pago-ver',
            'evidencia-pago-crear',
            'evidencia-pago-editar',
        ]);

        $supervisorAtc->givePermissionTo([
            'tipo-solicitud-ver',
            'tipo-solicitud-crear',
            'tipo-solicitud-editar',
            'tipo-solicitud-eliminar',
            'prioridad-ticket-ver',
            'prioridad-ticket-crear',
            'prioridad-ticket-editar',
            'prioridad-ticket-eliminar',
            'estado-ticket-ver',
            'estado-ticket-crear',
            'estado-ticket-editar',
            'estado-ticket-eliminar',
            'canal-ver',
            'canal-crear',
            'canal-editar',
            'canal-eliminar',
        ]);

        $atc->givePermissionTo([
            'ticket-ver',
            'ticket-crear',
            'ticket-editar',
            'ticket-eliminar',
            'ticket-reporte-ver',
        ]);
    }
}
