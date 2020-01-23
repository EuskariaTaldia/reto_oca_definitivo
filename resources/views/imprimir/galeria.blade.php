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

        {{-- FILTRADO --}}
        <div class="fondoFiltrado">
        <h2>Filtrado</h2>
        <div class="row">
        <div class="form-group col">
        

        <div class="form-group col">
            <label for="geo">Geografico:</label>
            <select class="form-control" id="geo">
                <option value="SinFiltro">Sin Filtro</option>
                  <option value="Europa">Europa</option>
                  <option value="Norteamerica">Norteamérica</option>
                  <option value="AmericaLatina">América Latina</option>
                  <option value="Asia">Asia</option>
                  <option value="Oceania">Oceanía</option>
                  <option value="Africa">África</option>
            </select>
        </div>
        
        <div class="form-group col align-self-end">
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" style="
                  padding-right: 0px;
                  padding-bottom: 0px;
                  padding-top: 0px;
                  padding-left: 0px;
                  border-right-width: 0px;
                  border-top-width: 0px;
                  border-bottom-width: 0px;
                  border-left-width: 0px;">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option value="anio" selected>Año</option>
                        <option value="siglo">Siglo</option>
                      </select>
                  </span>
                </div>
                <input id="de" type="text" class="form-control" placeholder="Desde">
                <input id="a" type="text" class="form-control" placeholder="Hasta">
              </div>
        </div>
        </div>
        <a href="{{ url('galeriaPregun')}}" class="btn btn-light" >Galeria Preguntas</a>
        <a href="{{ url('galeriaDatos')}}" class="btn btn-light" >Todos Los datos de mujeres</a>


        </div>
        <div class="fondo">
        
        {{-- LEYENDA --}}
       
    



        {{-- INICIO DE CARTAS --}}
        {{-- <div class="row"> --}}
            
  
        {{-- @foreach ($arraymujeres as $mujer) --}}
            
            {{-- <div class="col-3 columnas">
            
            @if($mujer["codArea"]=="1")
                <div class="historia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="2")
                <div class="derecho card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="3")
                <div class="antropologia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="4")
                <div class="geografia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="5")
                <div class="filosofia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="6")
                <div class="psicologia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="7")
                <div class="economia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="8")
                <div class="sociologia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
            @elseif($mujer["codArea"]=="9")
            <div class="pedagogia card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;">
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