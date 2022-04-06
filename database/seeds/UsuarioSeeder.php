<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'usu_nombre'=>'Scarlet',
            'usu_cedula'=>'123456789',
            'usu_apellido'=>'Dayana',
            'usu_telefono'=>'0995032284',
            
            'email'=>'admin@hotmail.com',
            'password'=>bcrypt('123456789'),
            'created_at'=>date('Y-m-d H:i'),
            
        ]);
    }
}
