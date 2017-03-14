//JOSEMA GONZALEZ

let expresiones = {
    regexNombre: /^([A-ZÁÉÍÓÚÑ][a-zñáéíóú]+[\s]*)+$/,
    errorNombre: "Nombre incorrecto. Ejemplo: José Manuel",
    regexEmail: /^[a-z0-9]+([\._a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/,
    errorEmail: "Email incorrecto. Ejemplo: usuario@usuario.com",
    regexDni: /^(0?[1-9]|[1-9][0-9])[0-9]{6}(-| )?[trwagmyfpdxbnjzsqvhlcke]$/i,
    errorDni: "DNI incorrecto. Ejemplo: 12345678A",
    regexFecha: /(0?[1-9]|[12][0-9]|3[01])[- \/](0?[1-9]|1[012])[- \/](19|20)\d\d/,
    errorFecha: "Fecha incorrecta. Ejemplo: 12/05/1994",

    comprobarSiVacio: function (cadena) {
        if (cadena.length == 0)
            return true;
        return false;
    },

    comprobarRegex: function (regex, cadena) {
        return regex.test(cadena);
    },

    validar: function (campoAValidar, cadena) {
        if (expresiones.comprobarSiVacio(campoAValidar))
            return "El campo no puede estar vacío";
        switch (cadena) {
            case "nombre":
                if (!expresiones.comprobarRegex(expresiones.regexNombre, campoAValidar))
                    return expresiones.errorNombre;
                break;
            case "email":
                if (!expresiones.comprobarRegex(expresiones.regexEmail, campoAValidar))
                    return expresiones.errorEmail;
                break;
            case "dni":
                if (!expresiones.comprobarRegex(expresiones.regexDni, campoAValidar))
                    return expresiones.errorDni;
                break;
            case "fecha":
                if (!expresiones.comprobarRegex(expresiones.regexFecha, campoAValidar))
                    return expresiones.errorFecha;
                break;

        }

        return "";
    }

};
