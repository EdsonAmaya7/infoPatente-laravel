<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('usuarios')->insert([
            'tipo' => 'ADMINISTRADOR',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '12345678',
            'nombre' => 'ADMINISTRADOR',
            'apellido_paterno' => 'ADMINISTRADOR',
            'apellido_materno' => 'ADMINISTRADOR',
            'email' => 'usuario@infopatente.mx',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '22345',
            'telefono' => '180012345',
            'estatus' => 1,
        ]);
        DB::table('usuarios')->insert([
            'tipo' => 'Profesor',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '93530',
            'nombre' => 'Carlos',
            'apellido_paterno' => 'Gonzalez',
            'apellido_materno' => 'Flores',
            'email' => 'usuario@infopatente.gonzalezc757@gmail.com',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25000',
            'telefono' => '8444142941',
            'estatus' => 1,
        ]);

        DB::table('usuarios')->insert([
            'tipo' => 'Alumno',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '123456789',
            'nombre' => ' Fernando',
            'apellido_paterno' => 'GARCIA',
            'apellido_materno' => 'Morales',
            'email' => 'fer_nando152012@hotmail.com',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25069',
            'telefono' => '8443326254',
            'estatus' => 1,
        ]);
        DB::table('usuarios')->insert([
            'tipo' => 'ALUMNO',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '16322621',
            'nombre' => 'VANESSA',
            'apellido_paterno' => 'QUIROZ ',
            'apellido_materno' => 'TRUJILLO',
            'email' => 'izumisena@gnail.com',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25093',
            'telefono' => '8445322621',
            'estatus' => 0,
        ]);
        DB::table('usuarios')->insert([
            'tipo' => 'ALUMNO',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '14008851',
            'nombre' => 'FERNANDO ',
            'apellido_paterno' => 'MORALES',
            'apellido_materno' => 'GARCIA',
            'email' => 'fernando@hotmail.com',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25069',
            'telefono' => '8441234567',
            'estatus' => 1,
        ]);
        DB::table('usuarios')->insert([
            'tipo' => 'ALUMNO',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '18363447',
            'nombre' => 'JESUS',
            'apellido_paterno' => 'DE LA CRUZ',
            'apellido_materno' => 'DAVILA',
            'email' => 'delacruzjesus083@gmail.com',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25015',
            'telefono' => '8443691710',
            'estatus' => 1,
        ]);



        DB::table('usuarios')->insert([
            'tipo' => 'ALUMNO',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '1234567',
            'nombre' => 'JISUS',
            'apellido_paterno' => 'DE LA CRUZ',
            'apellido_materno' => 'DAVILA',
            'email' => 'jesusdavila@uadec.edu.mx',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25015',
            'telefono' => '8443691710',
            'estatus' => 1,
        ]);
        DB::table('usuarios')->insert([
            'tipo' => 'INDEPENDIENTE',
            'empresa' => 'NO APLICA',
            'num_identificacion' => 'NO APLICA',
            'nombre' => 'MAYELA',
            'apellido_paterno' => 'JIMENEZ',
            'apellido_materno' => 'QUIROS',
            'email' => 'guariamorada73@gmail.com',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25000',
            'telefono' => '8444377367',
            'estatus' => 1,
        ]);

        DB::table('usuarios')->insert([
            'tipo' => 'ALUMNO',
            'empresa' => 'UNIVERSIDAD AUTONOMA DE COAHUILA',
            'num_identificacion' => '1234567',
            'nombre' => 'JESUS',
            'apellido_paterno' => 'DE LA CRUZ',
            'apellido_materno' => 'DAVILA',
            'email' => 'delacruzj533@gmail.com',
            'password' => '$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',
            'cp' => '25015',
            'telefono' => '8443691710',
            'estatus' => 1,
        ]);
    }
}
