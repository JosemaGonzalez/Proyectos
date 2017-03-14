{
    //JOSEMA GONZALEZ
    $(document).ready(function() {

        $("a.nueva").on("click", function(evento) {
            evento.preventDefault();
            let nueva = window.open('', '');
            nueva.document.write('<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Josema Gonzalez</title><meta charset="utf-8" /><script src="js/jquery.js"></script><script src="js/detodo.js"></script></head><body><noscript>Este navegador no tiene activado javascript</noscript>    <h2>De todo un poco - Josema Gonzalez</h2><input id="Informa" type="button" value="Informa" /><input id="Raton" type="button" value="Ratón" /><input id="salir" type="button" value="Salir" /><br><br><div id="contenido"></div></body></html>');
            nueva.document.close();
        });
        $("button.nueva").on("click", function(evento) {
            evento.preventDefault();
            let nueva2 = window.open('', '');
            nueva2.document.write('<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Josema Gonzalez</title> <meta charset="utf-8" /> <script src="js/jquery.js"></script> <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" /> <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script><script src="js/Empleado.js" type="text/javascript"></script><script src="js/formEmpleado.js" type="text/javascript"></script></head><body> <noscript>Este navegador no tiene activado javascript</noscript><h2>De todo un poco - Josema Gonzalez</h2><div> <form action=""> <p><label>Nombre</label><input type="text" data-validation="custom" id="nombre" data-validation-regexp="^([A-ZÁÉÍÓÚ][a-zñáéíóú]{3,})+(\\s[A-ZÁÉÍÓÚ][a-zñáéíóú]{3,})+$"> </p> <p> <label>Fecha de nacimiento</label> <input type="text" data-validation="birthdate" id="fecha" data-validation-format="dd/mm/yyyy"></p><p><label>DNI</label><input type="text" data-validation="custom" id="dni" data-validation-regexp="^(0?[1-9]|[1-9][0-9])[0-9]{6}(-| )?[TRWAGMYFPDXBNJZSQVHLCKE]$"> </p> <p> <label>Acepto la condiciones de uso </label> <input type="checkbox" name="check" data-validation="checkbox_group" data-validation-qty="1"> </p><div><input type="button" id="enviar" value="Enviar" disabled><input type="reset" id="reset" value="Limpiar Campos"></div></form></div></body></html>');
            nueva2.document.close();
        });

    });
}
