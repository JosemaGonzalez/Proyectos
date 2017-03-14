{
    let nombre;
    let pass;
    let errorNombre;
    let errorPass;
    let submit;
    let borrar;
    let com;

    let escribir = function(mensaje) {
        document.getElementById("errores").innerHTML = '<p>' + mensaje + '</p>';
    }
    let setCookie = function(cname, cvalue, exdays) {
        let d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    let getCookie = function(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    let checkCookie = function(cname) {
        let username = getCookie(cname);
        if (username != "") {
            return true;
        } else {
            return false;
        }
    }
    let limpiar = function() {
        setCookie('nombre', getCookie('nombre'), -1);
        setCookie('pass', getCookie('pass'), -1);
        nombre.value = "";
        pass.value = "";
        errorNombre.textContent = "";
        errorPass.textContent = "";
        escribir("Borrado todo");
    }
    let enviar = function() {
        com = false;
        if (validarCadena(nombre.value) == "" && validarPass(pass.value) == "") {
            setCookie('nombre', nombre.value, 365);
            setCookie('pass', pass.value, 365);
            com = true;
        }
        if (com == false) {
            comprobar();
            escribir("Algo ha ido mal");
        } else {
            escribir("Login correcto");
        }
    }
    let expNombre = /^[a-z\d_]{5,}$/;
    let msjErrorNombre = "Error";

    let cadenaVacia = function(variable) {
        if (variable.length == 0) {
            return false;
        }
        return true;
    }
    let comprobarExp = function(exp, variable) {
        return exp.test(variable);
    }
    let validar = function(entrada, exp, msjError) {
        if (!cadenaVacia(entrada.value)) {
            return "No puede estar el campo vacío";
        } else if (!comprobarExp(exp, entrada.value)) {
            return msjError;
        } else {
            return "";
        }
    }
    let comprobar = function(salida, entrada) {
        salida.innerHTML = validar(entrada, expNombre, msjErrorNombre);
    }

    let init = function() {
        nombre = document.getElementById('nombre');
        pass = document.getElementById('pass');
        errorNombre = document.getElementById('errorNombre');
        errorPass = document.getElementById('errorPass');
        submit = document.getElementById('submit');
        borrar = document.getElementById('borrar');
        submit.addEventListener("click", enviar);
        borrar.addEventListener("click", limpiar);
        nombre.addEventListener("blur", comprobar.bind(null, errorNombre, nombre));
        pass.addEventListener("blur", comprobarPass);
        if (checkCookie('nombre')) {
            nombre.value = getCookie('nombre');
            escribir("Cookie cargada");
        }
        if (checkCookie('pass')) {
            pass.value = getCookie('pass');
        }
    }

    window.onload = init;
}
