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
    return view('app');
});

Route::get('/miruta',function(){

echo('hola esta es la ruta que creastes..');
});

Route::get('/saludo/{nombre}/{apellido?}',function($nombre, $apellido='(no hay apellido)'){
    echo'hola '.$nombre.' '.$apellido;
});

Route::get('/marcas',
'MarcasController@index');

Route::get('/formulariocategorias',
'CategoriasController@index');


Route::get('/formularioproductos',
'ProductosController@index');
