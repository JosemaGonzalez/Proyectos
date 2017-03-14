let a = function() {

    function CerosyUnos() {
        let elemento;
        let resultado = 0;
        let numeros = [];
        do {
            elemento = prompt("Inserte número");
            numeros.push(elemento);

        } while (elemento != 2 || isNaN(elemento)==NaN)

        numeros.sort();
        for (var i = 0; i < numeros.length; i++) {
            while ((numeros[i]) > 0) {
                numeros.shift();
            }

        }
        console.log("Número de 0: " + numeros.length)
    }
    CerosyUnos()
}()
