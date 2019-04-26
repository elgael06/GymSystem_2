<?php

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
//rutas de Logica
Route::get('/activacion', 'activacionController@index')->name('activacion');
Route::get('/clientes', 'clientesController@index')->name('clientes');
Route::get('/paquete', 'paqueteController@index')->name('paquete');
Route::get('/registro', 'registroController@index')->name('registro');
Route::get('/ventas', 'ventasController@index')->name('ventas');


