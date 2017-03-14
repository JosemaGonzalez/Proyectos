{
    //JOSEMA GONZALEZ
    let hoy;
    let btnInforma;
    let btnRaton;
    let contenido;

    let generarVentana = function () {
        document.write("<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/><title>De Todo</title><meta charset=\"utf-8\"/>    <script src=\"js/detodo.js\"></script></head><body><noscript>Este navegador no tiene activado javascript</noscript><h2>De todo un poco - Josema Gonzalez</h2><input id=\"Informa\" type=\"submit\" value=\"Informa\"/><input id=\"Raton\" type=\"submit\" value=\"Ratón\"/><input id=\"Salir\" type=\"submit\" value=\"Salir\" onclick='window.close()'/><br><br><div id='contenido'></div></body></html>");
    }
    let diaDeLaSemana = function (date) {
        switch (date.getDay()) {
            case 0:
                return "Domingo";
            case 1:
                return "Lunes";
            case 2:
                return "Martes";
            case 3:
                return "Miércoles";
            case 4:
                return "Jueves";
            case 5:
                return "Viernes";
            default:
                return "Sábado";
        }
    }
    let reloj = function (date) {
        let horas = date.getHours();
        let minutos = date.getMinutes();
        let comhoras = new String(horas);
        let comminutos = new String(minutos);
        if (comhoras.length == 1) {
            horas = "0" + horas;
        }
        if (comminutos.length == 1) {
            minutos = "0" + minutos;
        }

        return horas + ":" + minutos;
        
    }
    let raton = function (event) {
        x = event.clientX;
        y = event.clientY;
        contenido.innerHTML = "Posición X:" + x + "<br/>Posición Y:" + y;
    }
    let calculo = function (date) {
        let hora= date.getHours();
        let minu = date.getMinutes();
        let cadena = "";
        if (((hora > 18) && (hora < 23 && minu < 59))) {
            cadena = "Ya es hora de que dejes de trabajar. Hay que conciliar la vida laboral con la familiar";
        }
        if (((hora > 0) && (hora < 7 && minu < 59)) ){
            cadena = "Ya es hora de que comiences a trabajar. Hay que levantar el país";
        }
        if ((hora > 8) && (hora < 17 && minu<59)) {
            cadena = " Pronto llegan las vacaciones. Aguanta";
        }
        return cadena;
    }

    let informar = function () {
        contenido.innerHTML = "Hoy es " + diaDeLaSemana(hoy) + " hora " + reloj(hoy)+"<br>"+calculo(hoy);

    }

    let init= function() {
        generarVentana();
        hoy = new Date();
        btnInforma = document.getElementById("Informa");
        btnRaton = document.getElementById("Raton");
        contenido = document.getElementById("contenido");

        btnInforma.addEventListener("click", informar);
        btnRaton.addEventListener("click", raton);
    }
    window.onload = init;
}