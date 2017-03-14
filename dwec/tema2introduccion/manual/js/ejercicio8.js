let a = function() {
    let num = prompt("Introduce un número");
    function numeros(num) {
        if (isNaN(num) || num <= 0) {
            alert("El número no es válido");
            return;
        } else {
            if ((num % 2) === 0) {
                mensaje = "Es par";
            } else {
                mensaje = "Es impar";
            }
            alert(mensaje);
        }
    }
    numeros(num);
}()
