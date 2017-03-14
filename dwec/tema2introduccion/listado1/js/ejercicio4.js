let a = function() {
    function numeroPrimo() {
        let elemento = parseInt(prompt("Introduce un número"));
        if (isNaN(elemento)==NaN || elemento <= 0) {
            alert("El número no es válido");
            return;
        } else {
            let cont = 2;
            let primo = true;
            while (primo && (cont != elemento)) {
                if ((elemento % cont) == 0)
                    primo = false;
                cont++;
            }
            if (primo == true) {
                console.log("Es primo")
            } else {
                console.log("No es primo")
            }
        }
    }
    numeroPrimo();
}
()
