<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos',function(Blueprint $table){
            $table->id('mov_id');
            $table->date('mov_fecha');
            $table->integer('mov_tipo');
            $table->float('mov_cantidad');
            $table->string('mov_detalle');
            $table->foreignId('tip_id')->references('tip_id')->on('tipo');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
