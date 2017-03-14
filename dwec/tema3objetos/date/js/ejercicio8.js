let calcularEdad = function(anno, mes, dia) {
    try {
        let fecha = new Date(anno, (mes - 1), dia);
        let fechaActual = new Date();
        let annio = fecha.getFullYear();
        let annoActual = fechaActual.getFullYear();
        if ((annoActual - annio) < 0) {
            throw "Has introducido un año no válido"
        }
        if ((annoActual - annio) == 0) {
            let mes = fecha.getMonth();
            let mesActual = fechaActual.getMonth();
            let dia = fecha.getDay();
            let diaActual = fechaActual.getDay();
            if ((mesActual - mes) < 0) {
                throw "Has introducido un mes no válido"
            } else
                return ("Tiene: " + (mesActual - mes) + " meses")
        } else {
            return "Su edad: " + (annoActual - annio);
        }
    } catch (error) {
        return "Hay algún error\n" + error;
    }
}
console.log(calcularEdad(2010, 5, 12));
console.log(calcularEdad(2016, 5, 12));
console.log(calcularEdad(2016, 12, 12));
console.log(calcularEdad(201226, 5, 12));
