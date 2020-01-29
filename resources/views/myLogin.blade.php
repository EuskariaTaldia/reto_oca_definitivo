@extends('layouts.master')

@section('content')
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2>Tienes una cuenta?</h2>
            <p>Inicia sesion clickando aquí!</p>
            <label id="label-register" for="log-reg-show">Iniciar sesion</label>
            <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
        </div>
                            
        <div class="register-info-box">
            <h2>¿No tienes una cuenta?</h2>
            <p>Registrate en un solo click!</p>
            <label id="label-login" for="log-login-show">Registrarse</label>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>
                            
        <div class="white-panel">
            {{-- LOGIN --}}
            <div class="login-show">
                <h2>INICIAR SESION</h2>

                <form method="POST" action="{{ route('login') }}" class="logForm" id="logForm">
                    @csrf

                    <input id="emailLogin" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" placeholder="Email"
                    pattern="[A-Za-z.0-9-_]{1,20}[@][a-z]{1,20}[.][a-z]{1,3}" minlength="10" maxlength="50" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong> E-mail incorrecto </strong>
                        </span>
                    @enderror

                    <input id="passwordLogin" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Contraseña"
                    pattern="[A-Za-zÑñ0-9]{1,20}" minlength="5" maxlength="100" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong> Contraseña incorrecta </strong>
                        </span>
                    @enderror

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recordar contraseña') }}
                        </label>
                    </div>

                    <p id="mensajeError"></p>

                    <a href="">¿Has olvidado la contraseña?</a>

                    <div class="flexBtn">
                        <button type="reset" class="btn btn-dark logBtn"  id="reset"> BORRAR </button>                               
                        <button type="submit" class="btn btn-dark logBtn" id="btnLogin"> ENTRAR </button>    
                    </div>      
                </form>
            </div>

            
            {{-- REGISTRO --}}
            <div class="register-show">
                <h2>CREAR CUENTA</h2>

                <form method="POST" action="{{ route('register') }}" class="logForm" id="registerForm">
                    @csrf

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name"  placeholder="Nombre"
                    pattern="[A-Za-zñÑ ]{1,20}" minlength="3" maxlength="20" required autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong> Caracteres incorrectos </strong>
                        </span>
                    @enderror

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email"
                    autocomplete="email" pattern="[A-Za-z.0-9-_]{1,20}[@][a-z]{1,20}[.][a-z]{1,3}" minlength="10" maxlength="50" required >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong> Pruebe con otro E-mail</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Contraseña"
                    pattern="[A-Za-zÑñ0-9]{1,20}" minlength="5" maxlength="100" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>Escriba otra contraseña</strong>
                        </span>
                    @enderror

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirmar Contraseña"
                    pattern="[A-Za-zÑñ0-9]{1,20}" minlength="5" maxlength="100" required>
                    
                    <p id="mensajeError"></p>

                    <div class="flexBtn">
                        <button type="reset" class="btn btn-dark logBtn" id="reset"> BORRAR </button>                               
                        <button type="submit" class="btn btn-dark logBtn" id="btnRegistro"> ENTRAR </button>    
                    </div>                                    
                </form>
            </div>
        </div>
    </div>

@stop