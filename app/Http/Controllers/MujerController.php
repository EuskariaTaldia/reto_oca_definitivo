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

    public function destroy(Request $mujer)
    {
        $mujer = Mujer::destroy($mujer->id);
        return $mujer;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}
