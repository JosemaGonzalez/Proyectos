let a = function() {
    let cadena = prompt("Introduce una cadena");
    palindromo(cadena);

    function palindromo(cadena) {
        if (!isNaN(cadena) || cadena == null || cadena.length == 0 || /^\s+$/.test(cadena)) {
            alert("No es una cadena")
            return;
        } else {
            let cadena2 = cadena.split('').reverse().join();
            let resultado = "No son palindromos";
            if (cadena === cadena2) {
                resultado = "Son palindromos";
            }
            alert(resultado);
        }
    }
}()
