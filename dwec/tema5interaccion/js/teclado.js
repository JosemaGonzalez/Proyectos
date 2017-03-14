{
    let escribir = function(mensaje) {
        document.getElementById("caja").innerHTML = '<p>' + mensaje + '</p>';
    }

    let teclasnormales = function() {
        let evento = window.event;
        let codigo = evento.charCode || evento.keyCode;
        let letra = String.fromCharCode(codigo);
        escribir("Carácter [" + letra + "]<br>Código [" + codigo + "]");
    }

    let teclasespeciales = function() {
        let event = window.event;
        if (event.ctrlKey) {
            escribir("Carácter [ctrl]<br>Código [" + event.keyCode + "]");

        }
        if (event.altKey) {
            escribir("Carácter [alt]<br>Código [" + event.keyCode + "]");
        }
        if (event.shiftKey) {
            escribir("Carácter [shift]<br>Código [" + event.keyCode + "]");
        }
    }

    let init = function() {
        document.addEventListener("keypress", teclasnormales);
        document.addEventListener("keydown", teclasespeciales);
    }

    window.onload = init;
}
