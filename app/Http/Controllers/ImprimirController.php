<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mujer;
use App\Pregunta;

<<<<<<< HEAD
class ImprimirController extends Controller
{

    public function getGaleria() {
        $mujeres = Mujer::all();

        return view('imprimir.galeria', ["arraymujeres" => $mujeres]);
=======
class ImprimirController extends Controller  {
    
    // TODAS las mujeres modo CARTA  
    public function getGaleria() {
        $arrayMujeres = Mujer::all();
        // $arrayAreas = Area::all();
        
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.cartas', compact("usuario", "arrayMujeres"));
>>>>>>> 343138ee0fd5d2c6e6dda1baee4e830033f8c498
    }
    
<<<<<<< HEAD
    public function getInformacion($id){
        $mujer = Mujer::findOrFail($id);

        return view('imprimir.informacion', ['mujer'=> $mujer]);
    }
    

    public function getPreguntas() {
        $preguntas = Pregunta::all();
        $mujeres = Mujer::all();

        return view('imprimir.preguntas', ["arraypreguntas" => $preguntas], ["arraymujeres" => $mujeres]);
    }


    public function getTablero(Request $request) {
        $mujeres = Mujer::all();
=======
    // TODAS las pregunatas modo CARTA  
    public function getPreguntas() {
        $arrayPreguntas = Pregunta::all();

        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.preguntas',  compact("usuario", "arrayPreguntas"));
    }

     // Informacion de solo UNA mujer
    public function getInformacionMujer($id) {
        $mujer = Mujer::findOrFail($id);
        
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.informacion',  compact("usuario", "mujer"));
    }

    // Informacion de TODAS las mujeres
    public function getInformacionMujeres() {
        $mujeres = Mujer::all();
        
        return view('imprimir.mujeres', ["arraymujeres" => $mujeres]);
    }


    // TABLERO DE LA OCA
    public function getTablero(Request $request) {        
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        if($request->input('especificacionSelect') != null){
            $especificacion = $request->input('especificacionSelect');
        } else {
            $especificacion = "null";
        }

>>>>>>> 343138ee0fd5d2c6e6dda1baee4e830033f8c498
        $gameType = $request->input('gameType');
        $filtro = $request->filtro;
        $especificacion = $request->especificacion;
        $jugador = $request->input('jugador');

        return view('imprimir.tablero',compact ("gameType", "filtro", "especificacion", "jugador","mujeres"));
        

    }

}
