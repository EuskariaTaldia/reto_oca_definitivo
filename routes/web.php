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

Route::get('/tabla', function () {
    return view('tabla');
});

Route::get('/peticion', 'PeticionsController@index');

Route::put('/peticion/actualizar', 'PeticionsController@update');

Route::post('/peticion/guardar', 'PeticionsController@store');

Route::delete('/peticion/borrar/{codPeti}', 'PeticionsController@destroy');

Route::get('/peticion/buscar', 'PeticionsController@show');



