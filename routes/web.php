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

Route::get('/mujeres', function () {
    return view('mujer');
});

Route::get('/peticion', 'PeticionsController@index');


Route::put('/peticion/actualizar', 'PeticionsController@update');
Route::put('/peticion/actualizaar', 'PeticionsController@actualizaar');


Route::post('/peticion/guardar', 'PeticionsController@store');
Route::post('/peticion/guardaar', 'PeticionsController@pasarTabla');


Route::delete('/peticion/borrar/{codPeti}', 'PeticionsController@destroy');

Route::get('/peticion/buscar', 'PeticionsController@show');



Route::get('/mujer', 'MujerController@index');

Route::put('/mujer/actualizar', 'MujerController@update');

Route::post('/mujer/guardar', 'MujerController@store');

Route::delete('/mujer/borrar/{id}', 'MujerController@destroy');

Route::get('/mujer/buscar', 'MujerController@show');




