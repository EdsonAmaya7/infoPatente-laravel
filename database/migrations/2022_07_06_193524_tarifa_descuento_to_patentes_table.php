<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TarifaDescuentoToPatentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patentes', function (Blueprint $table) {
            //
            $table->string('tarifa_descuento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patentes', function (Blueprint $table) {
            //
            $table->dropColumn('tarifa_descuento');
        });
    }
}
