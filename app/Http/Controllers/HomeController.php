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
<<<<<<< HEAD
        // $this->middleware('auth');
=======
        //$this->middleware('auth');
>>>>>>> 343138ee0fd5d2c6e6dda1baee4e830033f8c498
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
<<<<<<< HEAD
    public function getIndex()
    {
        // auth()->user()->name;
=======
    public function getIndex() {
>>>>>>> 343138ee0fd5d2c6e6dda1baee4e830033f8c498
        if(Auth::check() ) {
            $usuario = Auth::user()->name;
        } else{
            $usuario = "anonimo";
        }

        $arrayZonas = Zona::all();
        $arrayAreas = Area::all();
      
        return view('home', compact("usuario", "arrayZonas", "arrayAreas"));
    }
}
