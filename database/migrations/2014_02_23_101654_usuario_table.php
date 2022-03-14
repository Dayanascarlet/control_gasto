<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('usu_id');
            $table->foreignId('per_id')->references('per_id')->on('permisos');
            
            $table->string('usu_nombre');
            $table->string('usu_apellido');
            $table->string('usu_cedula');
            $table->string('usu_telefono');
            $table->string('usu_estado')->default(1);
            $table->date('usu_fecha_nacimiento');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}