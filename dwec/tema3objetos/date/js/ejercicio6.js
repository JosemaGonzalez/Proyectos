let diaDeLaSemana = function(argument) {
    let dia = Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    if (arguments.length != 0) {
        console.log(dia[argument]);
    } else {
        let diaActual = new Date();
        console.log(dia[diaActual.getDay()]);
    }
}

diaDeLaSemana();
diaDeLaSemana(1);
diaDeLaSemana(6);
