<?php

namespace App\Http\Controllers;

use App\Peticion;
//use App\Zona;
use Illuminate\Http\Request;

class PeticionsController extends Controller
{

    public function index(Request $peticion)
    {
        $peticion = Peticion::all();
        return $peticion;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $peticion = new Peticion();

        $peticion->nombreMujer = $request->nombreMujer;
        $peticion->fechas = $request->fechas;
        $peticion->codArea = $request->codArea;
        $peticion->subArea = $request->subArea;
        $peticion->datos = $request->datos;
        $peticion->enlace = $request->enlace;
        $peticion->codZona = $request->codZona;
        $peticion->zona = $request->zona;
        $peticion->fotografia = $request->fotografia;

        $peticion->save();
        //Esta función guardará las tareas que enviaremos mediante vuejs
    }
    public function show(Request $request)
    {
        $peticion = Peticion::findOrFail($request->codPeti);
        return $peticion;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $peticion = Peticion::findOrFail($request->codPeti);

        $peticion->nombreMujer = $request->nombreMujer;
        $peticion->fechas = $request->fechas;
        $peticion->codArea = $request->codArea;
        $peticion->subArea = $request->subArea;
        $peticion->datos = $request->datos;
        $peticion->enlace = $request->enlace;
        $peticion->codZona = $request->codZona;
        $peticion->zona = $request->zona;
        $peticion->fotografia = $request->fotografia;

        $peticion->save();

        return $peticion;
        //Esta función actualizará la tarea que hayamos seleccionado

    }

    public function destroy(Request $request)
    {
        $peticion = Peticion::destroy($request->codPeti);
        return $peticion;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}
