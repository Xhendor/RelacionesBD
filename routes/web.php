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

//Route::get('/', function () {
//    return view('dashboard.index');
//});
// Ruta Dashboard
Route::get('/', 'DashboardController@index')->name('/');

Route::get('admin/dashboard', 'DashboardController@index')->name('admin/dashboard');

// Rutas CRUD

/* Crear */
Route::get('admin/bicicletas/crear', 'BicicletasController@crear')->name('admin/bicicletas/crear');
Route::put('admin/bicicletas/store', 'BicicletasController@store')->name('admin/bicicletas/store');

/* Leer */
Route::get('admin/bicicletas', 'BicicletasController@index')->name('admin/bicicletas');

/*Visualizar registro*/
Route::get('admin/bicicletas/detallesproducto/{id}', 'BicicletasController@detallesproducto')->name('admin/bicicletas/detallesproducto');


/* Actualizar */
Route::get('admin/bicicletas/actualizar/{id}', 'BicicletasController@actualizar')->name('admin/bicicletas/actualizar');
Route::put('admin/bicicletas/update/{id}', 'BicicletasController@update')->name('admin/bicicletas/update');

/* Eliminar */
Route::put('admin/bicicletas/eliminar/{id}', 'BicicletasController@eliminar')->name('admin/bicicletas/eliminar');

/* Eliminar imagen de un registro */
Route::get('admin/bicicletas/eliminarimagen/{id}{bid}', 'BicicletasController@eliminarimagen')->name('admin/bicicletas/eliminarimagen');
