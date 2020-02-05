<?php

namespace App\Http\Controllers;

use App\Mujer;
use Illuminate\Http\Request;

class MujerController extends Controller
{

    public function index(Request $mujer)
    {
        $mujer = Mujer::all();
        return $mujer;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $mujer = new Mujer();
        // $peticion = Peticion::findOrFail($request->id);

        $mujer->nombre = $request->nombreMujer;
        $mujer->fechas = $request->fechas;
        $mujer->codArea = $request->codArea;
        $mujer->subarea = $request->subArea;
        $mujer->datos = $request->datos;
        $mujer->enlace = $request->enlace;
        $mujer->codZona = $request->codZona;
        $mujer->zona = $request->zona;
        $mujer->fotografia = $request->fotografia;

        $mujer->save();

        return $mujer;
    }
    public function show(Request $request)
    {
        $mujer = Mujer::findOrFail($request->id);
        return $mujer;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $mujer = Mujer::findOrFail($request->id);

        $mujer->nombreMujer = $request->nombre;
        $mujer->fechas = $request->fechas;
        //$mujer->codArea = $request->codArea;
        $mujer->subArea = $request->subArea;
        $mujer->datos = $request->datos;
        $mujer->enlace = $request->enlace;
        //$mujer->codZona = $request->codZona;
        $mujer->zona = $request->zona;
        $mujer->fotografia = $request->fotografia;

        $mujer->save();

        return $mujer;
        //Esta función actualizará la tarea que hayamos seleccionado

    }

    public function destroy(Request $request)
    {
        $mujer = Mujer::destroy($request->id);
        return $mujer;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}
