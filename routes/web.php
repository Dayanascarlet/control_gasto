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
Route::get('/tipo/create','tipoController@create')->name('tipo.create');
Route::post('/tipo/store','tipoController@store')->name('tipo.store');
Route::get('/tipo/edit/{tip_id}','tipoController@edit')->name('tipo.edit');
Route::post('tipo/update/{tip_id}','tipoController@update')->name('tipo.update');
Route::post('tipo/destroy/{tip_id}','tipoController@destroy')->name('tipo.destroy');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');

Route::get('/permisos','PermisosController@index')->name('permisos');
Route::get('/permisos/create','PermisosController@create')->name('permisos.create');
Route::post('/permisos/store','PermisosController@store')->name('permisos.store');
Route::get('/permisos/edit/{per_id}','PermisosController@edit')->name('permisos.edit');
Route::post('permisos/update/{per_id}','permisosController@update')->name('permisos.update');
Route::post('permisos/destroy{per_id}','permisosController@destroy')->name('permisos.destroy');

Route::get('/movimientos','movimientosController@index')->name('movimientos');
Route::get('/movimientos/create','movimientosController@create')->name('movimientos.create');
Route::post('/movimientos/store','movimientosController@store')->name('movimientos.store');
Route::get('/movimientos/edit/{mov_id}','movimientosController@edit')->name('movimientos.edit');
Route::post('movimientos/update/{mov_id}','movimientosController@update')->name('movimientos.update');
Route::post('movimientos/destroy{mov_id}','movimientosController@destroy')->name('movimientos.destroy');









// Route::post('/movimientos/store','movimientosController@store')->name('movimientos.store');
// Route::get('/movimientos/create{mov_id}','movimientosController@create')->name('movimientos.create');
// Route::post('/movimientos/update{mov_id}','movimientosController@update')->name('movimientos.update');
// Route::get('/movimientos/edit/{mov_id}','movimientosController@edit')->name('movimientos.edit');