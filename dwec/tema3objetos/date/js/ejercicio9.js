let calcularHastaFinDeAnno = function(anno, mes, dia) {
    try {
        if (isNaN(arguments[0]) || isNaN(arguments[1]) || isNaN(arguments[2])) {
            throw "";
        } else {
            let fechaActual = new Date(anno, mes - 1, dia);
            let fecha = new Date(anno, 11, 31);
            let dias = (fecha.getTime() - fechaActual.getTime()) / (1000 * 60 * 60 * 24);
            console.log("Faltan:  " + dias + " días para fin de año");
        }
    } catch (error) {
        console.log("Hay algún error\n" + error);
    }
}
calcularHastaFinDeAnno(2016, 11, 10);
calcularHastaFinDeAnno(2016, 1, 10);
calcularHastaFinDeAnno();
