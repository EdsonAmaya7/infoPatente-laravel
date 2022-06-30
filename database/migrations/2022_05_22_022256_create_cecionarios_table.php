<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCecionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cecionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('direccion_primaria');
            $table->string('direccion_secundaria');
            $table->string('pais');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('cp');
            $table->string('nombre_patente');
            $table->foreignId("patentes_id")->references('id')->on("patentes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cecionarios');
    }
}
