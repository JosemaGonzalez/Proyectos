{
    //JOSEMA GONZALEZ

    let formulario;
    let nombre;
    let errorNombre;
    let fecha;
    let errorFecha;
    let dni;
    let errorDni;
    let check;
    let errorCheck;
    let enviar;
    let errorEnviar;
    let correcto;
    var empleado;
    let final;
    let hoy;
    let btnCerrar;
    let ventana;

    let validarNombre = function () {
        errorNombre.innerHTML = expresiones.validar(nombre.value, "nombre");
    }

    let validarFecha = function () {
        errorFecha.innerHTML = expresiones.validar(fecha.value, "fecha");

    }

    let validarDni = function () {
        errorDni.innerHTML = expresiones.validar(dni.value, "dni");
    }

    let comprobarCheck = function () {
        if (!check.checked) {
            return "Tiene que aceptar las condiciones";
        } else {
            return "";
        }
    }
    let validarCheck = function () {
        errorCheck.innerHTML = comprobarCheck();
    }

    let validarTodo = function () {
        validarNombre();
        validarFecha();
        validarDni();
        validarCheck();
        let array=[];
        let com = true;
        array.push(expresiones.validar(nombre.value, "nombre"),expresiones.validar(fecha.value, "fecha"),expresiones.validar(dni.value, "dni"));
        for (let i = 0; i < array.length; i++) {
            if (array[i] == "") {
                com = true;
            }
            else {
                errorEnviar.innerHTML = "El formulario tiene errores";
                correcto.innerHTML = "";
                com = false;
                break;
            }
        }
        if (com && check.checked) {
            correcto.innerHTML = "Formulario válido";
            errorEnviar.innerHTML = "";
            empleado = new Empleado(nombre.value, fecha.value, dni.value);
            empleado.mostrarVentana();
            limpiarCamposForm();
        }
    }
    let limpiarCamposForm = function () {
        nombre.value = "";
        fecha.value = "";
        dni.value = "";
        correcto.innerHTML = "";
        errorEnviar.innerHTML = "";
    }


    let init = function () {
        formulario = document.getElementById("formulario");
        nombre = document.getElementById("Nombre");
        errorNombre = document.getElementById("errorNombre");
        fecha = document.getElementById("Fecha");
        errorFecha = document.getElementById("errorFecha");
        dni = document.getElementById("Dni");
        errorDni = document.getElementById("errorDni");
        check = document.getElementById("check");
        errorCheck = document.getElementById("errorCheck");
        enviar = document.getElementById("Enviar");
        errorEnviar = document.getElementById("errorEnviar");
        correcto = document.getElementById("Correcto");
        btnCerrar = document.getElementById("Cerrar");

        nombre.addEventListener("blur", validarNombre);
        fecha.addEventListener("blur", validarFecha);
        dni.addEventListener("blur", validarDni);
        check.addEventListener("blur", validarCheck);
        enviar.addEventListener("click", validarTodo);

    }
    window.onload = init;
}
