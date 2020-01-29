@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Galeria</li>
            <li class="breadcrumb-item active" aria-current="page">Preguntas</li>
        </ol>
    </nav>
        
    <div class="fondo">
        <input class="btn btn-dark ancho" type="button" name="imprimir" value="Imprimir Datos" onclick="window.print();">

        <h2>Listado modo carta</h2>

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
        <div class="row">
        {{-- Recorremos todas las mujeres --}}
        @foreach ($arrayPreguntas as $pregun)
        <div class="col-6 columnas">
        {{-- Carta Pregunta --}}
        {{-- Se le pone fondo --}}
        @if($pregun->mujer->codArea=="1")
            <div class="historia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="2")
            <div class="derecho card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="3")
            <div class="antropologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="4")
            <div class="geografia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="5")
            <div class="filosofia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="6")
            <div class="psicologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="7")
            <div class="economia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="8")
            <div class="sociologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="9")
        <div class="pedagogia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @endif
            <div class="circulo">
            <img class="card-img-top border-left img-thumbnail imaTam" src="{{$pregun->mujer->fotografia}}" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$pregun->mujer->nombre}}</h5>
              {{-- <h5 class="card-title">{{$pregun->mujer["nombre"]}}</h5> --}}
              <p class="card-text">{{$pregun["pregunta"]}}</p>
                <div id="respuestas" name="respuestas">
                    <?php
                    // Se imprimen las respuestas Ramdom
                        $resC=$pregun["respuestacorrecta"];
                        $resE1=$pregun["respuestaerronea1"];
                        $resE2=$pregun["respuestaerronea2"];
                        $respuestas=array($resC,$resE1,$resE2);
                        // var_dump($respu);
                        shuffle($respuestas);
                        foreach ($respuestas as $respuesta) {
                            if($respuesta==$resC){
                                echo "<li type='circle'><u>$respuesta  </u><br></li>";
                            }else {
                                echo "<li type='circle'>$respuesta  <br></li>";
                            }   
                        }

                        ?>
                </div>
            </div>
          </div>

          {{-- Carta Datos --}}
            {{-- Se le pone fondo --}}
          @if($pregun->mujer->codArea=="1")
            <div class="historia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="2")
            <div class="derecho card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="3")
            <div class="antropologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="4")
            <div class="geografia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="5")
            <div class="filosofia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="6")
            <div class="psicologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="7")
            <div class="economia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="8")
            <div class="sociologia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @elseif($pregun->mujer->codArea=="9")
        <div class="pedagogia card text-white bg-dark mb-3 tamañoCarta" style="max-width: 18rem;">
        @endif
            <div class="card-body">
                {{-- Se imprimen los datos con una relacion entre tablas --}}
              <p class="card-title sinEspacio 
              @if($pregun->mujer->codArea=="2" || $pregun->mujer->codArea=="8")
                colorLetra
                @endif
                "><b><u>{{$pregun->mujer->nombre}}</u></b></p>
              <p class="card-text sinEspacio 
              @if($pregun->mujer->codArea=="2" || $pregun->mujer->codArea=="8")
              colorLetra
              @endif
              ">({{$pregun->mujer->fechas}})</p>
              <p class="card-text 
              @if($pregun->mujer->codArea=="2" || $pregun->mujer->codArea=="8")
              colorLetra
              @endif
              ">{{$pregun->mujer->zona}}</p>
              <p class="card-text tamañoLetra  
              @if($pregun->mujer->codArea=="2" || $pregun->mujer->codArea=="8")
              colorLetra
              @endif
              ">{{$pregun->mujer->datos}}</p>

              
            </div>
          </div>
        </div>
        @endforeach
                 
           
        </div>
    </div>

@stop