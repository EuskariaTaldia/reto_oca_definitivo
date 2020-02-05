window.addEventListener("load", iniciar);

function iniciar() {
    var btnJugar = document.getElementById("btnJugar");
    var enviarPeticion = document.getElementById("enviarPeticion");
    var btnLogin =  document.getElementById("btnLogin");
    var btnRegistro =  document.getElementById("btnRegistro");
    var btnReset =  document.getElementById("reset");


    // Comoprobamos que es lo que estamos validando
    if(btnJugar != null) btnJugar.addEventListener('click', validarJuego, false);
    // if(enviarPeticion != null) enviarPeticion.addEventListener('click', validarPeticion, false);
    if(btnLogin != null) btnLogin.addEventListener('click', validarLogin, false);
    if(btnRegistro != null) btnRegistro.addEventListener('click', validarRegistro, false);
    if(btnReset != null) btnReset.addEventListener('click', borrarError, false);

}


// Funcion que usamos en el HOME
function validaJugadores() {
    var elemento = document.getElementById("jugador");
    if (!elemento.checkValidity()) {
        if (elemento.value < 1 || elemento.value > 4) {
            error(elemento, "Elige jugadores entre 1 y 4");
            return false;
        }

    }
    return true;
}


// Funciones que usaremos en la PETICION
function validaNombreCompleto() {
    var elemento = document.getElementById("nombreApellido");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Tienes que escribir un nombre.");
            return false;
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "El nombre no puede contener números.");
            return false;
        }

        if (elemento.value.length < 2 || elemento.value.length > 50) {
            error(elemento, "El tamaño de nombre tiene que ser mayor de 2 y menor que 50.");
            return false;
        }

    }
    return true;
}


function validaFechas() {
    var elemento = document.getElementById("fecha");

    if (!elemento.checkValidity()) {
        if (elemento.validity.patternMismatch) {
            error(elemento, "Fecha incorrecta.");
            return false;
        }

        if (elemento.value.length > 9) {
            error(elemento, "La fechas no deben de contener más de 9 caracteres.");
            return false;
        }

        if (elemento.validity.valueMissing) {
            elemento.value = " ";
        }

        return false;
    }
    return true;
}


function validaSubArea() {
    var elemento = document.getElementById("subArea");

    if (!elemento.checkValidity()) {
        if (elemento.validity.patternMismatch) {
            error(elemento, "La subarea no puede contener números.");
            return false;
        }

        if (elemento.value.length > 50) {
            error(elemento, "La subarea no debe de contener más de 50 caracteres.");
            return false;
        }
        
        if (elemento.validity.valueMissing) {
            elemento.value = " ";
        }

        return false;
    }
    return true;
}


function validaPais() {
    var elemento = document.getElementById("pais");

    if (!elemento.checkValidity()) {
        alert("pais");

        if (elemento.validity.patternMismatch) {
            alert("error pais");
            error(elemento, "El país no puede ser numérico.");
            return false;
        }

        if (elemento.value.length > 50) {
            error(elemento, "El pais no debe de contener más de 50 caracteres.");
            return false;
        }

        if (elemento.validity.valueMissing) {
            elemento.value = " ";
        }        

        return false;
    }
    return true;
}

function validaUrlFoto() {
    var elemento = document.getElementById("foto");    

    if (!elemento.checkValidity()) {     
        if (elemento.validity.valueMissing) {
            elemento.value = " ";     
            return true;     

        } 

        if (elemento.validity.patternMismatch && elemento.value != " ")  {
            error(elemento, "La foto tiene que ser un URL.");
            return false;
        }

        if (elemento.value.length > 300) {
            error(elemento, "El URL de la foto no debe de contener más de 300 caracteres.");
            return false;
        }    
        
        
    
        return false;
    }

    return true;
}

function validaUrlEnlace(){
    var elemento = document.getElementById("enlace");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Tienes que poner el URL de la información.");
            return false;
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "Tiene que ser un URL.");
            alert("eeeee");
            return false;
        }

        if (elemento.value.length > 300) {
            error(elemento, "El URL de la información no debe de contener más de 200 caracteres.");
            return false;
        }

        return false;
    }

    return true;

}

function validaInformacion() {
    var elemento = document.getElementById("informacion");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            elemento.value = " ";
            alert("informacion");
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "Caracteres incorrectos.");
            return false;
        }

        if (elemento.value.length > 400) {
            error(elemento, "La fechas no deben de contener más de 400 caracteres.");
            return false;
        }

        return false;
    }
    return true;
}


// Funciones para el REGISTRO
function validaCorreo() {
    var elemento = document.getElementById("email");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            errorRegistro(elemento, "Tienes que poner un correo electronico");
            return false;
        }

        if (elemento.validity.patternMismatch) {
            alert("pattern");
            errorRegistro(elemento, "Tiene que ser un correo electronico, ej: ejemplo@gmail.com");
            return false;
        }
        
        if (elemento.value.length < 10 ||elemento.value.length > 30) {
            errorRegistro(elemento, "El correo tiene que contener entre 10-30 caracteres");
            return false;
        }

        return false;
    }
    return true;
}

function validaNombre(){
    var elemento = document.getElementById("name");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            errorRegistro(elemento, "Tienes que escribir un nombre.")
            return false;
        }

        if (elemento.validity.patternMismatch) {
            errorRegistro(elemento, "No puede contener numeros");
            return false;
        }


        if (elemento.value.length < 3) {
            errorRegistro(elemento, "El nombre tiene que ser mayor que 8");
            return false;
        }

        return false;
    }

    return true;
}


function validaContraseñaRegistro() {
    var elemento = document.getElementById("password");
    var elemento2 = document.getElementById("password-confirm");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            errorRegistro(elemento, "Tienes que escribir una contraseña.")
            return false;
        }

        if (elemento.value.length < 8) {
            errorRegistro(elemento, "La contraseña tiene que ser mayor que 8");
            return false;
        }

        return false;
    }

    
    if (!elemento2.checkValidity()) {
        if (elemento2.validity.valueMissing) {
            errorRegistro(elemento2, "Tienes que escribir una confirmacion de contraseña.")
            return false;
        }

        if (elemento2.value.length < 10) {
            errorRegistro(elemento2, "La contraseña tiene que ser mayor que 8");
            return false;
        }

        return false;
    }

    if(elemento.value != elemento2.value){
        alert("ERROR");
        errorRegistro(elemento2, "Las contraseñas no coinciden!");
        return false;
    }
    
    return true;
}


// Funciones para el LOGIN
function validaContraseñaLogin() {
    var elemento = document.getElementById("passwordLogin");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Tienes que escribir una contraseña.")
            return false;
        }

        if (elemento.value.length < 8) {
            error(elemento, "La contraseña tiene que ser mayor que 8");
            return false;
        }

        return false;
    }

    return true;
}


function validaCorreoLogin() {
    var elemento = document.getElementById("emailLogin");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Tienes que poner un correo electronico");
            return false;
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "Tiene que ser un correo electronico, ej: ejemplo@gmail.com");
            return false;
        }
        
        if (elemento.value.length < 10 ||elemento.value.length > 30) {
            error(elemento, "La contraseña tiene que contener entre 8-30 caracteres");
            return false;
        }

        return false;
    }
    return true;
}

function errorRegistro(elemento, mensaje) {
    document.getElementById("mensajeError2").innerHTML ="* " + mensaje;
    alert("2" + mensaje);

    elemento.className += " error";
    elemento.focus();
}

function error(elemento, mensaje) {
    document.getElementById("mensajeError").innerHTML ="* " + mensaje;
    alert(mensaje);

    elemento.className += " error";
    elemento.focus();
}

function borrarError() {
    const logForm = document.getElementById("logForm");
    if(logForm != null){
        logForm.querySelectorAll('input');
       
        for (var i = 0; i < logForm.length; i++) {
            logForm[i].classList.remove("error");
        }
    }
   
    
    const registerForm = document.getElementById("registerForm");
    if(registerForm != null){
        registerForm.querySelectorAll('input');

        for (var i = 0; i < registerForm.length; i++) {
            registerForm[i].classList.remove("error");
        }  

        document.getElementById("mensajeError2").innerHTML ="";
    }
      
    
    const peticionForm = document.getElementById("peticionForm");
    if(peticionForm != null){
        peticionForm.querySelectorAll('input');        
    
        for (var i = 0; i < peticionForm.length; i++) {
            peticionForm[i].classList.remove("error");
        }    
    }

    document.getElementById("mensajeError").innerHTML ="";

}


// Validaciones para el TABLERO
function validarJuego(e) {
    borrarError();
    if (validaJugadores()) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}


// Validaciones para las PETICIONES
function validarPeticion(e) {
    borrarError();
    if (validaNombreCompleto() && validaFechas() && validaSubArea() && validaPais() && validaUrlFoto() && validaUrlEnlace() && validaInformacion() && confirm("Pulsa aceptar si deseas enviar el formulario")) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}


// Validaciones para el LOGIN
function validarLogin(e) {
    borrarError();
    if (validaCorreoLogin() && validaContraseñaLogin()) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}


// Validaciones para el REGISTRO
function validarRegistro(e) {
    borrarError();
    if (validaNombre() && validaCorreo() && validaContraseñaRegistro()) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}
