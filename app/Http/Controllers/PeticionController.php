<?php

namespace App\Http\Controllers;

use App\Peticion;
use Illuminate\Http\Request;

class PeticionController extends Controller
{
    public function getFormulario() {
        return view('peticion.crear');
    }

    
    public function getTabla() {

        $peticion = peticion::all();


        return view('peticion.tabla',["arraypeticiones" => $peticion]);
    }

        // recoger datos para insertar en la base de datos
    public function guardar(request $request){

        $peticion = new Peticion;

        $peticion->nombreApellido = $request->input('nombre');
        $peticion->subArea = $request->input('subArea');
        $peticion->area = $request->input('area');
        $peticion->zona = $request->input('zona');
        $peticion->zonaGeografica = $request->input('zonaGeografica');
        $peticion->foto = $request->input('foto');
        $peticion->fecha = $request->input('fecha');
        $peticion->mensaje = $request->input('mensaje');
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
