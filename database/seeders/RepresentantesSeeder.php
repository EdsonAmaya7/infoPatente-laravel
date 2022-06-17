<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepresentantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('representantes')->insert([
        "nombre" => "nombre",
        "apellido_paterno" => "apellido_paterno",
        "apellido_materno" => "apellido_materno",
        "direccion_primaria" => "direccion_primaria",
        "direccion_secundaria" => "direccion_secundaria",
        "pais" => "pais",
        "estado" => "estado",
        "ciudad" => "ciudad",
        "cp" => "cp",
        "nombre_patente" => "nombre_patente",
        ]);

        DB::table('representantes')->insert([
        "nombre" => "nombre1",
        "apellido_paterno" => "apellido_paterno1",
        "apellido_materno" => "apellido_materno1",
        "direccion_primaria" => "direccion_primaria1",
        "direccion_secundaria" => "direccion_secundaria1",
        "pais" => "pais1",
        "estado" => "estado1",
        "ciudad" => "ciudad1",
        "cp" => "cp1",
        "nombre_patente" => "nombre_patente1",
        ]);
        DB::table('representantes')->insert([
        "nombre" => "nombre2",
        "apellido_paterno" => "apellido_paterno2",
        "apellido_materno" => "apellido_materno2",
        "direccion_primaria" => "direccion_primaria2",
        "direccion_secundaria" => "direccion_secundaria2",
        "pais" => "pais2",
        "estado" => "estado2",
        "ciudad" => "ciudad2",
        "cp" => "cp2",
        "nombre_patente" => "nombre_patente2",
        ]);
    }
}
