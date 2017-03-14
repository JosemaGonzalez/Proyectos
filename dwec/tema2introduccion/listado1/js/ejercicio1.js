let a = function() {
    function adivina() {
        let elemento = parseInt(prompt("Introduce un número"));
        if (isNaN(elemento) || elemento <= 0 || elemento > 100) {
            alert("El número no es válido");
            return;
        } else {
            let num = Math.round(Math.random(0, 1) * 10);

            if (elemento == num) {
                console.log("Acertaste");
                console.log(num);

            } else {
                console.log("Prueba otra vez");
                if (num > elemento) {
                    console.log("el número es mayor");
                } else {
                    console.log("el número es menor");
                }
                //console.log(num);

            }
        }
    }
    adivina();
}()
