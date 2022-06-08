<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('empresas')->insert([
        'nombre' => 'N/A',
        'nombre_rl' => 'N/A',
        'direccion1_rl' => 'N/A',
        'direccion2_rl' => 'N/A',
        'email_rl' => 'N/A',
        'telefono' => 'N/A',
        'nombre_sol' => 'N/A',
        'email_sol' => 'N/A',
        'telefono_sol' => 'N/A',
        ]);

        DB::table('empresas')->insert([
        'nombre' => 'uadec',
        'nombre_rl' => '',
        'direccion1_rl' => 'direccionPrimaria',
        'direccion2_rl' => 'direccionSecuendaria',
        'email_rl' => 'email@email.com',
        'telefono' => '23423423423',
        'nombre_sol' => 'nombre_sol',
        'email_sol' => 'email_sol@sol.com',
        'telefono_sol' => '334243424',
        ]);
        DB::table('empresas')->insert([
        'nombre' => 'tec',
        'nombre_rl' => 'tecrl',
        'direccion1_rl' => 'direccionPrimaria',
        'direccion2_rl' => 'direccionSecuendaria',
        'email_rl' => 'tec@email.com',
        'telefono' => '23423423423',
        'nombre_sol' => 'nombre_sol',
        'email_sol' => 'tec_sol@sol.com',
        'telefono_sol' => '334243424',
        ]);
    }
}
