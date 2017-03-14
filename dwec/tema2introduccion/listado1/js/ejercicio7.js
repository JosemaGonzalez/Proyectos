let a = function() {
function decena() {
    let elemento = prompt("Inserte número");
    if (isNaN(elemento)==NaN || elemento <= 0) {
        alert("El número no es válido");
        return;
    } else {
        let e1 = elemento.split("");
        e1.reverse();
        let cont = elemento.length;
        console.log(e1.join(''));
        console.log("Número de cifras: " + cont)
    }
}
decena();
}()
