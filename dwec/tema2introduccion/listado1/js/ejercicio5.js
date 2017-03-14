let a = function() {
    function numeroPrimoSecuencia() {
        let elemento = parseInt(prompt("Introduce un número"));
        if (isNaN(elemento)==NaN || elemento <= 0) {
            alert("El número no es válido");
            return;
        } else {
            let cont = 2;
            let primo = true;
            let cont2 = 0;
            while (primo && (cont != elemento)) {
                if ((elemento % cont) == 0) {
                    primo = false;
                    cont2++;
                }
                cont++;

            }
            if (primo == true) {
                console.log("Es primo, número de primos: " + cont2)
            } else {
                console.log("No es primo, número de primos: " + cont2)
            }
        }
    }
    numeroPrimoSecuencia();
}()
