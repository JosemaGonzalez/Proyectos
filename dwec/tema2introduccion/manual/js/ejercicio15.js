function informacion(manejador) {
    var evento = manejador || window.event;
    switch (evento.type) {
        case "click":
            document.getElementById("info").style.backgroundColor = "#FFFF00";
            break;

        case "mousemove":
            document.getElementById("info").style.backgroundColor = "#FFFFFF";
            var ie = navigator.userAgent.toLowerCase().indexOf("msie") != -1;
            var coordenadaXrelativa, coordenadaYrelativa, coordenadaXabsoluta, coordenadaYabsoluta;
            if (ie) {
                if (document.documentElement && document.documentElement.scrollTop) {
                    coordenadaXabsoluta = evento.clientX + document.documentElement.scrollLeft;
                    coordenadaYabsoluta = evento.clientY + document.documentElement.scrollTop;
                } else {
                    coordenadaXabsoluta = evento.clientX + document.body.scrollLeft;
                    coordenadaYabsoluta = evento.clientY + document.body.scrollTop;
                }
            } else {
                coordenadaXabsoluta = evento.pageX;
                coordenadaYabsoluta = evento.pageY;
            }
            coordenadaXrelativa = evento.clientX;
            coordenadaYrelativa = evento.clientY;
            muestraInformacion(["Ratón", "Navegador [" + coordenadaXrelativa + ", " + coordenadaYrelativa + "]", "Pagina [" + coordenadaXabsoluta + ", " + coordenadaYabsoluta + "]"]);
            break;
        case "keypress":
            document.getElementById("info").style.backgroundColor = "#001EFF";
            var caracter = evento.charCode || evento.keyCode;
            var tecla = String.fromCharCode(caracter);
            var codigo = tecla.charCodeAt(0);
            muestraInformacion(["Teclado", "Carácter [" + tecla + "]", "Código [" + codigo + "]"]);
            break;

    }
}

function muestraInformacion(mensaje) {
    document.getElementById("info").innerHTML = "<h1>" + mensaje[0] + "</h1>";
    for (var i = 1; i < mensaje.length; i++) {
        document.getElementById("info").innerHTML += "<p>" + mensaje[i] + "</p>";
    }
}
document.onmousemove = informacion;
document.onkeypress = informacion;
document.onclick = informacion;
