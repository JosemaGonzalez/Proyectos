let a = function() {

function Muestra() {
    do {
        elemento = prompt("Inserte número");
        if (elemento < 0) {
            console.log("Has introducido un número negativo")
        } else {
            for (var i = 1; i <= elemento; i++) {
                console.log(i)
            }
        }
    } while (elemento > 0 || isNaN(elemento) == NaN)
}Muestra()
}()
