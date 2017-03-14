window.onload = function() {
    //1
    let array = [];
    //2
    console.log(array);
    //3
    let numerosAleatorios = function() {
        return parseInt(Math.random(1, 10) * 11);
    }
    for (var i = 0; i <= 10; i++) {
        array.push(numerosAleatorios());
    }
    console.log(array);
    //4
    array.sort((a, b) => a - b);
    console.log(array);
    //5
    let diaactual = function() {
        let fecha = new Date();
        let dia = fecha.getDay();
        if (dia == 1) {
            dia = 'Lunes';
        }
        if (dia == 2) {
            dia = 'Martes';
        }
        if (dia == 3) {
            dia = 'Miércoles';
        }
        if (dia == 4) {
            dia = 'Jueves';
        }
        if (dia == 5) {
            dia = 'Viernes';
        }
        if (dia == 6) {
            dia = 'Sábado';
        }
        if (dia == 7) {
            dia = 'Domingo';
        }
        return dia;
    }
    array.push(diaactual());
    console.log(array);
    //6
    array.push('Josema');
    console.log(array);
    //7
    array.push('Gonzalez');
    console.log(array);
    //8
    array.push('Peña');
    console.log(array);
    //9
    array.sort((a, b) => b - a);
    console.log(array);
    //10
    let mostrarForIn = function(argu) {
            //10.2
            let com = Array.isArray(argu);
            //10.3
            if (com == true) {
            //10.1
                for (a in argu) {
                    console.log('Indice: ' + a + ' => ' + argu[a]);
                }
                console.log('OK');
            }
            //10.4
            else
                console.log('No es un array')
        }
        //10.5
    mostrarForIn();
    mostrarForIn('');
    mostrarForIn(' ');
    mostrarForIn(1);
    mostrarForIn(array);
    //11
    let mostrarForOf = function(argu) {
            //11.2
            let com = Array.isArray(argu);
            //11.3
            if (com == true) {
            //11.1
                for (let [indice, elemento] of argu.entries()) {
                    console.log('Indice: ' + indice + ' => ' + elemento);
                }
                console.log('OK');
            } else
            //11.4
                console.log('No es un array')
        }
        //11.5
    mostrarForOf();
    mostrarForOf('');
    mostrarForOf(' ');
    mostrarForOf(1);
    mostrarForOf(array);
}
