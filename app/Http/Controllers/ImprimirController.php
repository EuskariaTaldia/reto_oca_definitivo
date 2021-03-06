<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Mujer;
use App\Pregunta;

class ImprimirController extends Controller  {
    
    // TODAS las mujeres modo CARTA  
    public function getGaleria() {
        $arrayMujeres = Mujer::all();
        
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.cartas', compact("usuario", "arrayMujeres"));
    }
    
    // TODAS las pregunatas modo CARTA  
    public function getPreguntas() {
        $arrayPreguntas = Pregunta::all();

        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        // return view('imprimir.preguntas',  compact("usuario", "arrayPreguntas"));
        
        // PRUEBAS        
        $arraymujeres = Mujer::all();

        return view('imprimir.mujeres', compact("usuario", "arraymujeres"));
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
        $arraymujeres = Mujer::all();
       
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "anonimo";
        }

        return view('imprimir.mujeres', compact("usuario", "arraymujeres"));
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
        $mujeres = Mujer::all();
        $arrayMujeres=$mujeres;
        $gameType = $request->input('gameType');
        $filtro = $request->filtro;
        $especificacion = $request->especificacion;
        $jugador = $request->input('jugador');

        return view('imprimir.tablero',compact ("gameType", "filtro", "especificacion", "jugador","arrayMujeres"));
        

    }


}
