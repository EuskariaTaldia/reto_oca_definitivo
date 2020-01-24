@extends('layouts.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Galeria</li>
            <li class="breadcrumb-item active" aria-currentx="page">Informacion</li>
        </ol>
    </nav>

    <div id="app">

        {{-- INICIO DE CARTAS --}}
        {{-- <div class="row"> --}}
            
  
        {{-- @foreach ($arraymujeres as $mujer) --}}
            
            {{-- <div class="col-3 columnas">
            
            @if($mujer["codArea"]=="1")
                <div class="historia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="2")
                <div class="derecho card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="3")
                <div class="antropologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="4")
                <div class="geografia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="5")
                <div class="filosofia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="6")
                <div class="psicologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="7")
                <div class="economia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="8")
                <div class="sociologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="9")
            <div class="pedagogia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
            @endif

                @if($mujer["fotografia"]==null)
                    <img class="card-img-top imagenMujer" src="https://image.flaticon.com/icons/png/512/23/23030.png" alt="Argazkia 1">
                @else
                    <img class="card-img-top imagenMujer" src="{{$mujer["fotografia"]}}" alt="Argazkia 1">
                @endif
                
                
                
                <div class="card-body">
                    
                    Si el codArea es 2 o 8 que cambie el color de la letra
                <h5 class="
                    @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8")
                    colorLetra
                    @endif
                    card-title">{{$mujer["nombre"]}}</h5>

                <h6 class="
                    @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8")
                    colorLetra
                    @endif
                    ">Año/Siglo: {{$mujer["fechas"]}}</h6>

                <h6 class="
                    @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8")
                    colorLetra
                    @endif
                    ">Zona: {{$mujer["zona"]}}</h6>
                <h6 class="
                    @if($mujer["codArea"]=="2" || $mujer["codArea"]=="8")
                    colorLetra
                    @endif
                    ">Estudios: {{$mujer["subarea"]}}</h6>
                    <a class="btn btn-secondary" href="{{$mujer["enlace"]}}">Fuente</a>
                    <a href="{{ url('informacion/'.$mujer["id"]) }}" class="btn btn-dark " role="button" aria-pressed="true">Información</a> --}}
                {{-- </div>
            </div> --}}
                <div class="content">
                    <example-component :mujeres="{{ $arrayMujeres }}" ></example-component>
                </div>
            {{-- </div> --}}
           
                
            {{-- @endforeach --}}
           
            <script src="{{asset('js/app.js')}}"></script>
        {{-- </div> --}}
        </div>
    </div>

@stop