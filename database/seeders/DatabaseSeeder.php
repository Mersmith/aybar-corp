<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PaisSeeder::class,
            RegionSeeder::class,
            ProvinciaSeeder::class,
            DistritoSeeder::class,
            EstadoTicketSeeder::class,
            CanalSeeder::class,
            AreaSeeder::class,
            TipoSolicitudSeeder::class,
            AsignacionesSeeder::class,
            TicketSeeder::class,


            //UnidadNegocioSeeder::class,
            //ProyectoSeeder::class,
            //LoteSeeder::class,
            //VentaSeeder::class,
            //CronogramaPagoSeeder::class,
            //PagoCuotaSeeder::class,
            //ReprogramacionSeeder::class,
            //ReprogramacionGeneralSeeder::class,
            //ImagenSeeder::class,
            //ArchivoSeeder::class,
            //PaginaSeeder::class,
            //MenuSeeder::class,
            //SeccionSeeder::class,
            //BlogSeeder::class,
            //ComunicadoSeeder::class,
            //TipoFormularioSeeder::class,
            //FormularioPaginaContactoSeeder::class,
            //FormularioLibroReclamacionSeeder::class,
        ]);
    }
}
