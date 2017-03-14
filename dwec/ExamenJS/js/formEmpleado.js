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
    let cerrar;

    let generarForm1 = function () {
        document.write("<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/><title>Crear Empleado</title><meta charset=\"utf-8\"/>    <script src=\"js/formEmpleado.js\"></script><style>.error{color:red;}.correcto{color:green;}</style></head><body><h2>Crear empleado - Josema González</h2><noscript>Este navegador no tiene activado javascript</noscript><div id=\"formulario\">" +
            "<label>Nombre:</label><input id=\"Nombre\" type=\"text\" autofocus/><span id=\"errorNombre\" class='error'></span><br>" +
            "<label>Fecha:</label><input id=\"Fecha\" type=\"text\"/><span id=\"errorFecha\" class='error'></span><br>" +
            "<label>DNI:</label><input id=\"Dni\" type=\"text\"/><span id=\"errorDni\" class='error'></span><br>" +
            "<label>Aceptas condiciones de uso?(obligatorio)</label><input id=\"check\" type=\"checkbox\"/><span id=\"errorCheck\" class='error'></span><br>" +
            "<input id=\"Enviar\" type=\"submit\"/><span id=\"errorEnviar\" class='error'></span><span id=\"Correcto\" class='correcto'></span></div></body></html>");
    }
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
        let array = [];
        let com = false;
        array.push(expresiones.validar(nombre.value, "nombre"), expresiones.validar(fecha.value, "fecha"), expresiones.validar(dni.value, "dni"));
        for (let i = 0; i < array.length; i++) {
            if (array[i] == "") {
                correcto.innerHTML = "Formulario válido";
                com = true;
            }
            else {
                errorEnviar.innerHTML = "El formulario tiene errores";
                correcto.innerHTML = "";
                com = false;
            }
           
        }
        if (com && check.checked) {
            errorEnviar.innerHTML = "";
            final = calcularDias();
            empleado = new Empleado(nombre.value, fecha.value, dni.value);
            window.open("ventana3.html", "Mi empleado", "width=500,height=400,bottom=0,right=0").document.write("<h2>Mi empleado - Josema González</h2>Hola mi nombre es " + empleado.nombre + "<br>Nací el " + empleado.fecha + "<br>Mi dni es " + empleado.dni + "<br>Para fin de año quedan " + final + " días<br><input id=\"Cerrar\" type=\"submit\" value='Cerrar' onclick='window.close()'/>");
        }
    }

    let calcularDias = function () {
        hoy = new Date();
        final = new Date(hoy.getFullYear(), 11, 31);
        let diferencia = final - hoy;
        return (Math.ceil(diferencia / (1000 * 60 * 60 * 24)));
    }

    let init = function () {
        generarForm1();

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
        cerrar = document.getElementById("Cerrar");

        nombre.addEventListener("blur", validarNombre);
        fecha.addEventListener("blur", validarFecha);
        dni.addEventListener("blur", validarDni);
        check.addEventListener("blur", validarCheck);
        enviar.addEventListener("click", validarTodo);
        cerrar.addEventListener("click", cerrarVentana);

    }
    window.onload = init;
}