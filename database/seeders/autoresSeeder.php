<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class autoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('autores')->insert([
            'nombre'=>'FERNANDO',
            'apellido_paterno'=>'GARCIA',
            'apellido_materno'=>'MORALES',
            'direccion1'=>'UAAAN 480',
            'direccion2'=>'VILLA UNIVERSIDAD',
            'pais'=>'MEXICO',
            'estado'=>'COAHUILA',
            'ciudad'=>'SALTILLO',
            'cp'=>'25069',
            'nombre_patente'=>'SCRIPTECH',
        ]);

        DB::table('autores')->insert([
            'nombre'=>'LIZETH',
            'apellido_paterno'=>'QUIROZ ',
            'apellido_materno'=>'TRUJILLO',
            'direccion1'=>'UAAAN CALLE 280',
            'direccion2'=>'VILLA COLONIA DEL SUR ',
            'pais'=>'MEXICO',
            'estado'=>'AGUASCALIENTES',
            'ciudad'=>'SALTILLO',
            'cp'=>'25092',
            'nombre_patente'=>'TUN',
        ]);

        DB::table('autores')->insert([
            'nombre'=>'CARLOS',
            'apellido_paterno'=>'GONZALEZ ',
            'apellido_materno'=>'',
            'direccion1'=>'',
            'direccion2'=>'FLORES ',
            'pais'=>'MEXICO',
            'estado'=>'COAHUILA',
            'ciudad'=>'SALTILLO',
            'cp'=>'25000',
            'nombre_patente'=>'PRUEBA DE CONCEPTO',
        ]);
    }
}
