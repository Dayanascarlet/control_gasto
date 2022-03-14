<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->id('egr_id');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('tip_id')->references('tip_id')->on('tipo_egresos');
            $table->float('egr_cantidad');
            $table->float('egr_fecha');
            $table->string('egr_detalle');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresos');
    }
}
