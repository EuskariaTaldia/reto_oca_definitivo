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

        <div class="content">
            <example-component :mujeres="{{ $arrayMujeres }}" ></example-component>
        </div>
        
        <script src="{{asset('js/app.js')}}"></script>

    </div>

@stop