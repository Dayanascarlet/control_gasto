<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ingresos', function (Blueprint $table) {
            $table->id('ing_id');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('tip_id')->references('tip_id')->on('tipo_ingresos');
            $table->float('ing_cantidad');
            $table->float('ing_fecha');
            $table->string('ing_detalle');
           
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
