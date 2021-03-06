<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Area;
use App\Zona;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex() {
        if(Auth::check() ) {
            $usuario = Auth::user()->name;
        } else{
            $usuario = "anonimo";
        }

        $arrayZonas = Zona::all();
        $arrayAreas = Area::all();
      
        return view('home', compact("usuario", "arrayZonas", "arrayAreas"));
    }
    

    public function getWelcome() {
        return view('welcome');
    }

    public function getLogin() {
        return view('myLogin');
    }
}
