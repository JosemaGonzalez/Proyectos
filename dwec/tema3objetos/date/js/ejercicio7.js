let esBisiesto = function(anno, mes, dia, hora, min, seg, mili) {
    try {
        if (isNaN(anno) || anno < 1) {
            throw "El año no es correcto"
        }

        if (isNaN(mes) || mes < 0) {
            throw "El mes no es correcto"
        }

        if (isNaN(dia) || dia < 1) {
            throw "El dáa no es correcto"
        }
        let fecha = new Date(anno, (mes - 1), dia, hora, min, seg, mili);
        let annio= fecha.getFullYear();
        if ((annio % 4 == 0) && (annio % 100 != 0) || (annio % 400 == 0)){
        	return "Es bisiesto";
        }
        else{
        	return "No es bisiesto";
        }
    } catch (error) {
        return error+"\nLa fecha no es válida";
    }
}

console.log(esBisiesto(2016,11,20,1,5,2,0));
console.log(esBisiesto("2016","kk",12,12,12,12,12));
