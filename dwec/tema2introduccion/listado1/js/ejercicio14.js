let a = function() {

    function Media() {
        let elemento;
        let resultado = 0;
        let numeros = [];
        do {
            elemento = prompt("Inserte número");
            numeros.push(elemento);

        } while (elemento > 0 || isNaN(elemento)==NaN)

        numeros.sort();
        for (var i = 0; i < numeros.length; i++) {
            while ((numeros[i]) <= 0) {
                numeros.shift();
            }
            resultado += parseInt(numeros[i]);
        }
        resultado = resultado/numeros.length;
        console.log("Media: " + resultado)
    }
    Media()
}()
