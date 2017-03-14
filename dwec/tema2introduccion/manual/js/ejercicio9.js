let a = function() {
        var cadena = prompt("Introduce una cadena");

        function compara(cadena) {
            if (!isNaN(cadena)||cadena == null || cadena.length == 0 || /^\s+$/.test(cadena)) {
            	alert("No es una cadena")
                return ;
            } else {
                resultado = "La cadena tiene mayúculas y minúsculas";
                if (cadena.toUpperCase() === cadena) {
                    resultado = "La cadena está en mayúsculas";
                }
                if (cadena.toLowerCase() === cadena) {
                    resultado = "La cadena está en minúsculas";
                }
            alert(resultado);
            }
        }
            compara(cadena);
    }
    ()
