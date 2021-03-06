@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Galeria</li>
            <li class="breadcrumb-item"><a href="{{url('/imprimirGaleria')}}">Informacion</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informacion Mujer</li>
        </ol>
    </nav>

    <div class="fondoInfo row">
        <div class="col-lg-4 col-md-12">
            {{-- Imprimimos la informacion de la mujer seleccionada en la galeria  --}}
            @if($mujer->fotografia==null)
            <img class="impFotoMujer" src="https://image.flaticon.com/icons/png/512/23/23030.png" alt="Argazkia 1">
        @else
            <img class="impFotoMujer" src="{{$mujer->fotografia}}" alt="Argazkia 1">
        @endif
 
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-7 col-md-12">
            {{-- Imprimimos los datos --}}
            <h2 class="letra">{{$mujer->nombre}}</h2>
            <h5 class="letra"> Año: {{$mujer->fechas}}</h5>
            <h5 class="letra"> Sub-Area: {{$mujer->subarea}}</h5>
            <h5 class="letra">Zona:{{$mujer->zona}}</h5>
            <h5 class="letra"> Datos:</h5><p class="letra"> {{$mujer->datos}}</p>

            <a href="{{ url('galeria')}} " class="btn btn-secondary">< Volver a la Galeria</a> 
            <a class="btn btn-dark" href="{{$mujer->enlace}}">Fuente</a>
            <input class="btn btn-dark" type="button" name="imprimir" value="Imprimir Datos" onclick="window.print();">
        </div>
    </div>

@stop