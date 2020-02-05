<?php

namespace App\Http\Controllers;

use App\Peticion;
use App\Area;
use App\Zona;

use Illuminate\Http\Request;

class PeticionController extends Controller
{
    public function getFormulario() {
        $arrayAreas = Area::all();
        $arrayZonas = Zona::all();

        return view('peticion.crear', compact("arrayZonas", "arrayAreas"));
    }

    
    public function getTabla() {
        $peticion = peticion::all();

        return view('peticion.tabla', ["arraypeticiones" => $peticion]);
    }

    
    // recoger datos para insertar en la base de datos
    public function guardar(request $request){

        $peticion = new Peticion;

        $peticion->nombreMujer = $request->input('nombre');
        $peticion->subArea = $request->input('subArea');
        $peticion->codArea = $request->input('area');
        $peticion->codZona = $request->input('zona');
        $peticion->zona = $request->input('pais');
        $peticion->fotografia = $request->input('foto');
        $peticion->fechas = $request->input('fecha');
        $peticion->datos = $request->input('información');
        $peticion->enlace = $request->input('enlace');

        $peticion->save();

    }

    public function index(Request $request)
    {
        $peticion = Peticion::all();
        return $peticion;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function show(Request $request)
    {
        $tapeticionsk = peticion::findOrFail($request->id);
        return $peticion;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $peticion = peticion::findOrFail($request->id);

        $peticion->name = $request->name;
        $peticion->description = $request->description;
        $peticion->content = $request->content;

        $peticion->save();

        return $peticion;
        //Esta función actualizará la tarea que hayamos seleccionado

    }

    public function destroy(Request $request)
    {
        $peticion = peticion::destroy($request->id);
        return $peticion;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}
