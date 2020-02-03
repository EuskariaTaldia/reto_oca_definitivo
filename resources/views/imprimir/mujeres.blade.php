@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Galeria</li>
            <li class="breadcrumb-item"><a href="{{url('/imprimirCartas')}}">Informacion</a></li>
            <li class="breadcrumb-item active" aria-current="page">Listado Mujeres</li>
        </ol>
    </nav>

    <h2>
        Listado de todas las Mujeres <i class="fa fa-print" name="imprimir" value="Imprimir Datos" onclick="window.print();"></i>
    </h2> 

    {{-- Recorremos todas las mujeres --}}
    @foreach ($arraymujeres as $mujer)

        <div class="fondoInfo row ">
            {{-- <div class="saltopagina"></div> --}}
            <div class="col-lg-3 col-md-12">
                {{-- TODO: La Imagen de la película --}}
                @if($mujer->fotografia==null)
                    <img class="impFotoMujer rounded" src="https://image.flaticon.com/icons/png/512/23/23030.png" alt="Argazkia 1">
                @else
                
                    <img class="impFotoMujer rounded" src="{{$mujer->fotografia}}" alt="Argazkia 1">
                @endif    
            </div>

            {{-- <div class="col-lg-1"></div> --}}
            <div class="col-lg-7 col-md-12">
                {{-- Imprimimos datos de las mujeres --}}
                <h3 class="colorLetr">{{$mujer->nombre}}</h3>
                <h5 class="colorLetr"> Año: {{$mujer->fechas}}</h5>
            
                <h5 class="colorLetr"> Sub-Area: {{$mujer->subarea}}</h5>
                <h5 class="colorLetr">Zona: {{$mujer->zona}}</h5>
                <h5 class="colorLetr"> Datos:</h5><p class="colorLetr"> {{$mujer->datos}}</p>


                <a class="btn btn-light" href="{{$mujer->enlace}}">Fuente</a>
            {{-- </div> --}}
            </div>
        </div>

    @endforeach    


@stop