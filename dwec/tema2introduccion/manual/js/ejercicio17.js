let init = function() {
    let texto = document.getElementById("texto");
    texto = document.addEventListener("keypress", limita);
    texto = document.addEventListener("keyup", actualiza);
}

let limita = function(event) {
    let elemento = document.getElementById("texto");
    let evento = event;
    let maximoCaracteres = 100;
    let caracter = evento.charCode || evento.keyCode;
    let cont = maximoCaracteres - elemento.value.length;
    if (elemento.value.length >= maximoCaracteres) {
        event.preventDefault();
    }
}
let actualiza = function() {
    var elemento = document.getElementById("texto");
    var info = document.getElementById("contador");
    let maximoCaracteres = 100;
    if (elemento.value.length >= maximoCaracteres) {
        info.innerHTML = "Máximo " + maximoCaracteres + " caracteres";
    } else {
        info.innerHTML = "Quedan: " + (maximoCaracteres - elemento.value.length) + " caracteresf";
    }
}
window.onload = init;
