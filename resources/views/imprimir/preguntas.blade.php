@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item">Galeria</li>
            <li class="breadcrumb-item active" aria-current="page">Preguntas</li>
        </ol>
    </nav>

    <h2>Imprimir listado con las preguntas:<h2>
        
    <div class="fondo">

        {{-- LEYENDA --}}
        <h6 style="display: flex;justify-content: center;align-items: center;color:white">Leyenda</h6>
        <div class="leyenda">
            <div class="row d-flex justify-content-center" style="margin-bottom: 20px;">
                <div class="circulo border-top border-left" style="background-color:#bf8000;">Historia</div>
                <div class="circulo border-top border-left" style="background-color:white;">Derecho</div>
                <div class="circulo border-top border-left" style="background-color:#ff8000;">Antropología</div>
                <div class="circulo border-top border-left" style="background-color:#e30400;">Geografía</div>
                <div class="circulo border-top border-left" style="background-color:#780053;color:white;">Filosofía</div>
                <div class="circulo border-top border-left" style="background-color: #004cb0;">Psicología</div>
                <div class="circulo border-top border-left" style="background-color:#ff6171;">Economía</div>
                <div class="circulo border-top border-left" style="background-color:#ffea00;">Sociología</div>
                <div class="circulo border-top border-left" style="background-color:#1aab00;">Pedagogía</div>
            </div>
        </div>  


        {{-- INICIO DE CARTAS --}}
        {{-- <div class="row">

            @foreach ($arraypreguntas as $pregunta)
                <p>{{$pregunta->mujeres->codArea}}</p> 

            @endforeach                
            
        </div> --}}
    </div>

@stop