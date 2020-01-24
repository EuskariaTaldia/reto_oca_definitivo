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
    use App\Http\Middleware\CheckAdmin;

    Auth::routes();

    // Ruta del inicio
    Route::get('/',  'HomeController@getWelcome');

    // Ruta de la pagina inicial
    Route::get('/home', 'HomeController@getIndex')->name('home');

    // Rutas para logearte
    Route::get('/login', 'Auth\LoginController@loginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    // Rutas para el registro
    Route::get('/register', 'Auth\LoginController@loginForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@create');


    // Rutas para imprimir cartas
    Route::get('/imprimirCartas', 'ImprimirController@getGaleria');
    Route::get('/imprimirPreguntas', 'ImprimirController@getPreguntas');


    // Rutas para imprimir la informacion
    Route::get('/imprimirInformacionMujer/{codMujer}', 'ImprimirController@getInformacionMujer');
    Route::get('/imprimirInformacionMujeres', 'ImprimirController@getInformacionMujeres');


    // Ruta para imprimir el tablero
    Route::post('/imprimirTablero', 'ImprimirController@getTablero');
     

    //PRUEBAS
    Route::get('/crearPeticion', 'PeticionController@getFormulario');
    Route::post('/crearPeticion', 'PeticionController@guardar');
    Route::get('/tablaPeticiones', 'PeticionController@getTabla')->middleware('is_admin');

    Route::group(['middleware ' => 'auth'], function () {   

        // if(Auth::check()){
        //     echo "eey";
        //     Route::get('/crearPeticion', 'PeticionController@getFormulario');
        //     Route::post('/crearPeticion', 'PeticionController@guardar');

        //     Route::get('/tablaPeticiones', 'PeticionController@getTabla')->middleware('is_admin');

        // } else {
        //     echo "else";
        //     // return view('myLogin');
        //     Route::get('/login', 'Auth\LoginController@loginForm')->name('login');
        // }

    });
    
    

?>

