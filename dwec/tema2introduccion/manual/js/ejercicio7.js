let a = function () {
let num = parseInt(prompt("Introduce un número"));
if (isNaN(num) || num <= 0) {
    alert("El número no es válido");
    return;
} else {
    let resultado = 1;
    let num1 = num;
    while (num1 > 0) {
        resultado = resultado * num1;
        num1--;
    }
    alert(resultado)
}
}()
