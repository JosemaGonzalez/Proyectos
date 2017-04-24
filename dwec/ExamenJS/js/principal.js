{
    //JOSEMA GONZALEZ

    let detodo;
    let emple;
    let ventana1;
    let ventana2;

    let abrirVentana1 = function () {
       ventana1= window.open("", "De todo un poco", "width=600,height=200,top=500,left=0");
       ventana1.document.write("<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/><title>De Todo</title><meta charset=\"utf-8\"/>    <script src=\"js/detodo.js\"></script></head><body><noscript>Este navegador no tiene activado javascript</noscript><h2>De todo un poco - Josema Gonzalez</h2><input id=\"Informa\" type=\"submit\" value=\"Informa\"/><input id=\"Raton\" type=\"submit\" value=\"Ratón\"/><input id=\"Salir\" type=\"submit\" value=\"Salir\"/><br><br><div id='contenido'></div></body></html>");
       ventana1.document.close();

   }

   let abrirVentana2 = function () {
        ventana2 = window.open("", "Crear Empleado", "width=600,height=200,top=200,left=0");
        ventana2.document.write("<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/><title>Crear Empleado</title><meta charset=\"utf-8\"/>    <script src=\"js/validaciones.js\"></script><script src=\"js/Empleado.js\"></script><script src=\"js/formEmpleado.js\"></script><style>.error{color:red;}.correcto{color:green;}</style></head><body><h2>Crear empleado - Josema González</h2><noscript>Este navegador no tiene activado javascript</noscript><div id=\"formulario\">" +
            "<label>Nombre:</label><input id=\"Nombre\" type=\"text\" autofocus/><span id=\"errorNombre\" class='error'></span><br>" +
            "<label>Fecha:</label><input id=\"Fecha\" type=\"text\"/><span id=\"errorFecha\" class='error'></span><br>" +
            "<label>DNI:</label><input id=\"Dni\" type=\"text\"/><span id=\"errorDni\" class='error'></span><br>" +
            "<label>Aceptas condiciones de uso?(obligatorio)</label><input id=\"check\" type=\"checkbox\"/><span id=\"errorCheck\" class='error'></span><br>" +
            "<input id=\"Enviar\" type=\"submit\"/><span id=\"errorEnviar\" class='error'></span><span id=\"Correcto\" class='correcto'></span></div></body></html>");
        ventana2.document.close();
    }
    let init = function () {
        detodo = document.getElementById("detodo");
        emple = document.getElementById("emple");
        detodo.addEventListener("click", abrirVentana1);
        emple.addEventListener("click", abrirVentana2);
    }
    window.onload = init;
}
