let a = function() {
        function cinco() {
            for (var i = 0; i < 7; i++) {
                let num = parseInt(prompt("Introduce un número"));
                if (isNaN(num) || num <= 0) {
                    alert("El número no es válido");
                    return;
                } else {
                    if ((num % 5) == 0) {
                        console.log("Es multiplo de 5")
                    } else {
                        console.log("No es multiplo")
                    }
                }
            }
        }
        cinco();
    }
    ()
