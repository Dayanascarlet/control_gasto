<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tipo','tipoController@index')->name('tipo');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');

Route::get('/permisos','PermisosController@index')->name('permisos');

Route::get('/permisos/create','PermisosController@create')->name('permisos.create');
Route::post('/permisos/store','PermisosController@store')->name('permisos.store');

Route::get('/permisos/edit/{per_id}','PermisosController@edit')->name('permisos.edit');
Route::post('permisos/update/{per_id}','permisosController@update')->name('permisos.update');
Route::post('permisos/destroy{per_id}','permisosController@destroy')->name('permisos.destroy');