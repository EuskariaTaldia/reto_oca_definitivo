window.addEventListener("load", iniciar);

function iniciar() {
    var btnJugar = document.getElementById("btnJugar");
    var enviarPeticion = document.getElementById("enviarPeticion");
    var btnLogin =  document.getElementById("btnLogin");
    var btnRegistro =  document.getElementById("btnRegistro");

    // Comoprobamos que es lo que estamos validando
    if(btnJugar != null) btnJugar.addEventListener('click', validarJuego, false);
    //if(enviarPeticion != null) enviarPeticion.addEventListener('click', validarPeticion, false);
    if(btnLogin != null) btnLogin.addEventListener('click', validarLogin, false);
    if(btnRegistro != null) btnRegistro.addEventListener('click', validarRegistro, false);
}

// FUncion que usamos en el HOME
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
//validaNombreCompleto() && validaFechas() && validaSubArea() && validaPais() && validaUrl() && validaInformacion()

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

        return false;
    }
    return true;
}

function validaPais() {
    var elemento = document.getElementById("pais");
    if (!elemento.checkValidity()) {
        if (elemento.validity.patternMismatch) {
            error(elemento, "El país no puede ser numérico.");
            return false;
        }

        if (elemento.value.length > 50) {
            error(elemento, "El pais no debe de contener más de 50 caracteres.");
            return false;
        }

        return false;
    }
    return true;
}

function validaUrl() {
    var elemento = document.getElementById("foto");
    var elemento2 = document.getElementById("enlace");

    if (!elemento.checkValidity()) {
        if (elemento.validity.patternMismatch) {
            error(elemento, "Tiene que ser un URL.");
            return false;
        }

        if (elemento.value.length > 300) {
            error(elemento, "El URL de la foto no debe de contener más de 300 caracteres.");
            return false;
        }

        return false;
    }

    if (!elemento2.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Tienes que poner el URL de la información.");
            return false;
        }

        if (elemento2.validity.patternMismatch) {
            error(elemento2, "Tiene que ser un URL.");
            return false;
        }

        if (elemento2.value.length > 300) {
            error(elemento2, "El URL de la información no debe de contener más de 200 caracteres.");
            return false;
        }

        return false;
    }

    return true;
}

function validaInformacion() {
    var elemento = document.getElementById("informacion");
    if (!elemento.checkValidity()) {
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


// Funciones para el LOGIN y el REGISTRO
function validaUsuario() {
    var elemento = document.getElementById("usuario");
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Erabiltzaile izena jarri behar duzu.");
            return false;
        }

        if (elemento.value.length < 5) {
            error(elemento, "Erabiltzaile luzeera 5-20 artean egon behar da.");
            return false;
        }

        return false;
    }

    return true;
}

function validaCorreo() {
    var elemento = document.getElementById("correo");
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Tienes que poner ")
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "Ezin da horrelako emaila izan, example: -------@----.---");
        }

        if (elemento.value.length < 10) {
            error(elemento, "Emailaren luzeera 10-50 artean egon behar da.");
            return false;
        }

        return false;
    }
    return true;
}

function validaContraseña() {
    var elemento = document.getElementById("contraseña");
    var elemento2 = document.getElementById("contraseña2");

    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "Pasahitza jarri behar duzu.")
        }

        if (elemento.value.length < 10) {
            error(elemento, "Pasahitzaren luzeera 10-50 artean egon behar da.");
            return false;
        }

        return false;
    }

    if (!elemento2.checkValidity()) {
        if (elemento2.validity.valueMissing) {
            error(elemento, "Pasahitza jarri behar duzu.")
        }

        if (elemento.value.length < 10) {
            error(elemento, "Pasahitzaren luzeera 10-50 artean egon behar da.");
            return false;
        }

        return false;
    }

    if(elemento.value != elemento2.value){
        error(elemento2, "Pasahiitzak ez dira berdinak!");
        return false;
    }
    
    return true;
}


function error(elemento, mensaje) {
    document.getElementById("mensajeError").innerHTML ="** " + mensaje + " **";
    elemento.className += " error";
    elemento.focus();
}

function borrarError() {
    var formulario = document.forms[0];
    alert(formulario.elements.length);
    for (var i = 0; i < formulario.elements.length; i++) {
        formulario.elements[i].classList.remove("error");

    }
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
    if (validaNombreCompleto() && validaFechas() && validaSubArea() && validaPais() && validaUrl() && validInformacion() && confirm("Pulsa aceptar si deseas enviar el formulario")) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}


// Validaciones para el LOGIN
function validarLogin(e) {
    borrarError();
    if (validaCorreo()) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}


// Validaciones para el REGISTRO
function validarRegistro(e) {
    borrarError();
    if (validaNombre() && validaCorreo() && validaContraseña()) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}
