@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Peticiones nueva</li>
        </ol>
    </nav>

   
    <section class="get-in-touch">

        <h2 class="title">Inserta los datos</h2>

        <form method="POST" action="{{ route('crearPeticion') }}" class="contact-form row">
        @csrf
            {{-- Nombre y apellidos --}}
            <div class="form-field col-lg-6">
                <input id="nombreApellido" type="text" class="input-text js-input @error('nombre') is-invalid @enderror"
                name="nombre" pattern="[A-Za-zñÑ ]{1,50}" minlength="2" maxlength="50" autofocus required>
                <label class="label" for="nombre">Nombre y apellido</label>
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong> Caracteres invalidos </strong>
                    </span>
                @enderror
            </div>


            {{-- Fechas --}}
            <div class="form-field col-lg-6">
                <input id="fecha" type="text" class="input-text js-input @error('fecha') is-invalid @enderror"
                name="fecha" placeholder="Ej: 1909-1990 // VI" pattern="[A-Za-zñÑ0-9 -]{1,10}" maxlength="9" required>
                <label class="label" for="fecha">Fecha / Siglo</label>
                @error('fecha')
                    <span class="invalid-feedback" role="alert">
                        <strong> Escribe otra fecha </strong>
                    </span>
                @enderror
            </div>


            {{-- Area --}}
            <div class="form-field col-lg-6">
                <select class="input-text js-input @error('area') is-invalid @enderror" name="area" id="area" required>
                    @foreach ($arrayAreas as $areas)
                        <option value="{{$areas['codArea']}}">{{$areas['area']}}</option>
                    @endforeach                
                </select>                            
                <label class="label" for="area">Area</label>
                @error('area')
                    <span class="invalid-feedback" role="alert">
                        <strong>Area incorrecta</strong>
                    </span>
                @enderror  
            </div>

            
            {{-- Sub Area --}}
            <div class="form-field col-lg-6 ">
                <input type="text" id="subArea" class="input-text js-input @error('subArea') is-invalid @enderror"
                name="subArea" placeholder="(ej: Historiadora del arte)" pattern="[A-Za-zñÑ ]{1,20}" maxlength="50" required>
                <label class="label" for="subArea">Sub Area</label>
                @error('subArea')
                    <span class="invalid-feedback" role="alert">
                        <strong>Sub area incorrecta</strong>
                    </span>
                @enderror
            </div>


            {{-- Zona geografica --}}
            <div class="form-field col-lg-6 ">
                <select class="input-text js-input @error('zona') is-invalid @enderror" name="zona" id="zona">
                    @foreach ($arrayZonas as $zonas)
                        <option value="{{$zonas['codZona']}}">{{$zonas['zona']}}</option>
                    @endforeach                
                </select>
                <label class="label" for="zona">Zona geografica</label>
                @error('pais')
                    <span class="invalid-feedback" role="alert">
                        <strong>Elige otra zona</strong>
                    </span>
                @enderror
            </div>


            {{-- Pais --}}
            <div class="form-field col-lg-6 ">
                <input type="text" id="pais" class="input-text js-input @error('pais') is-invalid @enderror" 
                name="pais" pattern="[A-Za-zñÑ ]{1,20}" maxlength="50"/>
                <label class="label" for="pais">Pais</label>
                @error('pais')
                    <span class="invalid-feedback" role="alert">
                        <strong>Lugar incorrecto</strong>
                    </span>
                @enderror
            </div>


            {{-- Foto URL --}}
            <div class="form-field col-lg-6">
                <input type="text" id="foto" class="input-text js-input @error('foto') is-invalid @enderror" 
                name="foto" pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)" minlength="1" maxlength="300" required/>                                          
                <label class="label" for="foto">Foto (URL)</label>
                @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>URL invalido</strong>
                    </span>
                @enderror
            </div>

            
            {{-- Informacion URL --}}
            <div class="form-field col-lg-6 ">                
                <input type="text" class="input-text js-input @error('enlace') is-invalid @enderror"
                name="enlace" pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)" minlength="1" maxlength="200" required/>     
                <label class="label" for="enlace">Información (URL)</label>
                 @error('enlace')
                    <span class="invalid-feedback" role="alert">
                        <strong>URL invalido</strong>
                    </span>
                @enderror
            </div>


            <div class="form-field col-lg-12">
                <textarea type="text" id="informacion" class="input-text js-input @error('información') is-invalid @enderror" name="información"
                pattern="[A-Za-zñÑ0-9 -/]{1,50}" maxlength="400"></textarea>
                <label class="label" for="información">Información</label>
                @error('información')
                    <span class="invalid-feedback" role="alert">
                        <strong>Datos erroneos</strong>
                    </span>
                @enderror
            </div>            

            <p id="mensajeError"></p>

            <div class="form-field col-lg-12 flexBtn ">                
                <input class="submit-btn" type="reset" value="Borrar">
                <input class="submit-btn" type="submit" id="enviarPeticion" value="Submit">
            </div>
        </form>

        
     </section>  

@stop
