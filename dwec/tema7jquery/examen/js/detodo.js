{
    //JOSEMA GONZALEZ
    let hoy;
    let btnInforma;
    let btnRaton;
    $(document).ready(function() {
        hoy = new Date();
        $salir = $('#salir');
        $("div").fadeOut(200);
        $("#Informa").on("click", function() {
            $("div").fadeOut(200);
            $("div").fadeIn("slow");
            $('#contenido').text("Hoy es " + diaDeLaSemana(hoy) + " hora " + reloj(hoy) + " " + calculo(hoy));
        });
        $("#Raton").on("click", raton);
        $salir.click(function() {
            window.close();
        });
    });
    let diaDeLaSemana = function(date) {
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
    let reloj = function(date) {
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
    let raton = function(event) {
        x = event.clientX;
        y = event.clientY;
        $("div").fadeOut(200);
        $("div").fadeIn("slow");
        $('#contenido').text("Posición X:" + x + " Posición Y:" + y);
    }
    let calculo = function(date) {
        let hora = date.getHours();
        let minu = date.getMinutes();
        let cadena = "";
        if (((hora >= 18) && (hora <= 23 && minu <= 59))) {
            cadena = "Ya es hora de que dejes de trabajar. Hay que conciliar la vida laboral con la familiar";
        }
        if (((hora >= 0) && (hora <= 7 && minu <= 59))) {
            cadena = "Ya es hora de que comiences a trabajar. Hay que levantar el país";
        }
        if ((hora >= 8) && (hora <= 17 && minu <= 59)) {
            cadena = " Pronto llegan las vacaciones. Aguanta";
        }
        return cadena;
    }

}
