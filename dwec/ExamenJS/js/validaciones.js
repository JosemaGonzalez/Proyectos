//JOSEMA GONZALEZ

let expresiones = {
    regexNombre: /^([A-ZÁÉÍÓÚÑ][a-zñáéíóú]+[\s]*)+$/,
    errorNombre: "Nombre incorrecto. Ejemplo: José Manuel",
    regexDni: /^(0?[1-9]|[1-9][0-9])[0-9]{6}(-| )?[trwagmyfpdxbnjzsqvhlcke]$/i,
    errorDni: "DNI incorrecto. Ejemplo: 12345678Z",
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
            /*
             * Compruebo primero que el dni coincide con la expresion
             * despues separo la cadena y mediante un algoritmo comprueba que
             * corresponde los numeros con su letra, si no coincide se sale
             */
             case "dni":
             if (!expresiones.comprobarRegex(expresiones.regexDni, campoAValidar)){
                return expresiones.errorDni;
            }
            if (!comprobarLetra())
                return expresiones.errorDniLetra;
            break;
            case "fecha":
            if (!expresiones.comprobarRegex(expresiones.regexFecha, campoAValidar))
                return expresiones.errorFecha;
            break;

        }

        return "";
    }

};
let comprobarLetra =function(){
    let numero = campoAValidar.substr(0,campoAValidar.length-1);
    let letr = campoAValidar.substr(campoAValidar.length-1,1);
    numero = numero % 23;
    let letra='TRWAGMYFPDXBNJZSQVHLCKET';
    letra=letra.substring(numero,numero+1);
    if (letra!=letr.toUpperCase()) {
      return false;
  }
  return true;
}
