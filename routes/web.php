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
    return redirect('productos');
});

Route::get('/productos', 'ProductosController@index');
Route::get('/productos/agregar', 'ProductosController@agregar');
Route::post('/productos/add', 'ProductosController@add');
Route::get('/productos/editar/{id}', 'ProductosController@editar');
Route::post('/productos/update', 'ProductosController@update');
Route::post('/productos/drop', 'ProductosController@drop');
