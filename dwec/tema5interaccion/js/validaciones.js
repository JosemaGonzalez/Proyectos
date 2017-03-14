let cadenaVacia = function(variable) {
    if (variable.length == 0) {
        return false;
    }
    return true;
}
let comprobarExp = function(exp, variable) {
    return exp.test(variable);
}
let validarPass=function(variable){
    let exp = /(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner una contraseña correcta";
    } else {
        return "";
    }
}
let validarCadena = function(variable) {
    let exp = /^([A-ZÁÉÍÓÚ][a-zñáéíóú]+[\s]*)+$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner una cadena correcta (José Manuel)";
    } else {
        return "";
    }
}

let validarIdiomas = function(variable) {
    let com = false;
    let valida="";
    for (let i = 0; i < variable.length; i++) {
        if (variable[i].checked) {
            com = true;
        }
    }
    if(com==false){
    	valida="Debe seleccionar al menos un idioma";
    }

    return valida;
}
let validarPeso = function(variable) {
    let exp = /^[0-9]{1,3}$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner un peso correcto";
    } else {
        return "";
    }
}
let validarEmail = function(variable) {
    let exp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner un email correcto (email@email.com)";
    } else {
        return "";
    }
}
let validarDni = function(variable) {
    let exp = /^(0?[1-9]|[1-9][0-9])[0-9]{6}(-| )?[trwagmyfpdxbnjzsqvhlcke]$/i;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner un DNI correcto (12345678A)";
    } else {
        return "";
    }
}
let validarFecha = function(variable) {
    let exp = /^[0,1]?\d{1}\/(([0-2]?\d{1})|([3][0,1]{1}))\/(([1]{1}[9]{1}[9]{1}\d{1})|([2-9]{1}\d{3}))$/;
    let exp1 = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp1, variable)) {
        return "Debes poner una fecha con formato correcto (dd/mm/aaaa)";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner una fecha válida (1/1/2016)";
    } else {
        return "";
    }
}
let validarTelefono = function(variable) {
    let exp = /^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner un teléfono correcto (+34666555444)";
    } else {
        return "";
    }
}
let validarCuenta = function(variable) {
    let exp = /^ES\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|ES\d{22}$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner una cuenta correcta (ES91 2100 0418 4502 0005 1332)";
    } else {
        return "";
    }
}
let validarUrl = function(variable) {
    let exp = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/;
    if (!cadenaVacia(variable)) {
        return "No puede estar el campo vacío";
    } else if (!comprobarExp(exp, variable)) {
        return "Debes poner una url correcta (www.algo.com)";
    } else {
        return "";
    }
}
