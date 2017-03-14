let a = function() {

        function OrdenaTres() {
            let elemento = parseInt(prompt("Introduce un número 1"));
            if (isNaN(elemento)==NaN || elemento <= 0) {
                alert("El número 1 no es válido");
                return;
            } else {
                let elemento2 = parseInt(prompt("Introduce un número 2"));
                if (isNaN(elemento2)==NaN || elemento2 <= 0) {
                    alert("El número 2 no es válido");
                    return;
                } else {
                    let elemento3 = parseInt(prompt("Introduce un número 3"));
                    if (isNaN(elemento3)==NaN || elemento3 <= 0) {
                        alert("El número 3 no es válido");
                        return;
                    } else {
                        let array = [elemento, elemento2, elemento3];
                        array.sort((a, b) => a - b);
                        for (var i = 0; i < array.length; i++) {
                            console.log(array[i]);
                        }
                    }
                }
            }
        }
        OrdenaTres();
    }
    ()
