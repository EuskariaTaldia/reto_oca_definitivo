@extends('layouts.master')

@section('content')

  {{-- VALORES RECOGIDOS POR EL FORMULARIO --}}
    <input type="hidden" id="tipoJuego" name="tipoJuego" value="{{$gameType}}">
    <input type="hidden" id="especificacion" name="especificacion" value="{{$especificacion}}">
    <input type="hidden" id="jugador" name="jugador" value="{{$jugador}}">
  {{-- -------------------------------------------------------------------------------------------  --}}



  {{-- MODAL PERDIDA DE TURNO --}}
  <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h3 class="modal-title" id="lineModalLabel">My Modal</h3>
        </div>

        <div class="modal-body">
          <h2>Has perdido el turno</h2>
            <!-- content goes here -->
        </div>

        <div class="modal-footer">
          <div class="btn-group btn-group-justified" role="group" aria-label="group button">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    {{-- LAYOUT --}}
    <div class="grid-layout">
      <div class="container sidecontenedor">
          <div class="fotoMujer"></div>
        <div class="textoMujer"></div>
        <p>This is some text.</p>

      </div>
      
      <div class="container tablero" id="tablero">            
          
        <h2 id="tiro" style="clear:left;"></h2>
        <h2 id="turno" style="clear:left;"></h2>
        <!-- tablero -->
        <div class="tabla" id="tabla">
        <?php
        $html = '';
        $totalItem = 64;
        $casillasEspeciales = [6, 12 , 19, 31, 42, 26, 53, 58, 63, 5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54, 59];
        $Tiponormal=[158,102,196,194,76,96,98,161,89,192,37,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
        $k=1;
        for($i = 0; $i < $totalItem; $i++){
          if(in_array($i,$casillasEspeciales,true)){
            switch($i){
                case 6:
                case 12:
                  //
                  $texto='../public/images/tablero/ManifestacionFeminista.jpg';
                  $html .= '<div id="'.$i.'" style="background-image: url('. $texto.'); grid-area: c'.$i.';">'.$i.'</div>';
                  break;
                case 26:
                case 53:
                
                        $texto='../public/images/tablero/dadosRosas.jpg';
                        $html .= '<div id="'.$i.'" style="background-image: url('. $texto.'); grid-area: c'.$i.';">'.$i.'</div>';    
                    break;
                 case 19:
                        //metod
                        //por determinar
                    break;
                case 31:
                        //metodo
                       $texto='../public/images/tablero/pozoMorado.jpg';
                        $html .= '<div id="'.$i.'" style="background-image: url('. $texto.'); grid-area: c'.$i.';">'.$i.'</div>';    
                      
                    break;
                case 42:
                       $texto='../public/images/tablero/laberintoMorado.jpg';
                        $html .= '<div id="'.$i.'" style="background-image: url('. $texto.'); grid-area: c'.$i.';">'.$i.'</div>';    
                      
                    break;
                case 58:
                        $texto='../public/images/tablero/Calaver.jpg';
                        $html .= '<div id="'.$i.'" style="background-image: url('. $texto.'); grid-area: c'.$i.';">'.$i.'</div>';    
                      
                    break;
                case 63:                
                case 64:
                case 65:
                case 66:
                case 67:
                case 68:
                     
                    break;
                case 5:
                case 9:
                case 14:
                case 18:
                case 23:
                case 27:
                case 32:
                case 36:
                case 41:
                case 45:
                case 50:
                case 54:
                case 59:
                   
                    break;            
            }

          }else{
            foreach ($arrayMujeres as $mujer){
            if($mujer->id==$Tiponormal[$k]){
              if($mujer->fotografia==null){
                $html .= '<div id="'.$i.'" style="background-image: src('.$mujer->fotografia.'); grid-area: c'.$i.'">'.$i.'</div>';
;

                }else{
                  $html .= '<div id="'.$i.'" style="background-image: url('.$mujer->fotografia.'); grid-area: c'.$i.'">'.$i.'</div>';

           }
              }else{
              } 
            }
            $k=$k+1;

         }
        }
      
        echo $html;
        ?>
        </div>
        <!-- fin tableor -->
        <nav class="fixed-bottom ">
          <div id="die1" class="dice"></div>
          <button onclick="onclikar()">Tira el Dado</button>
          <button onclick="valores(1,19)"> Dado trampa</button> 
          <button onclick="window.print();">imprimir</button>
        
        <nav>
      </div>
    </div>
@stop