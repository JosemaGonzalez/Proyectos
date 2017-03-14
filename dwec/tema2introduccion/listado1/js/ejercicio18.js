let a = function() {

    function lineas() {
        let numeros = "";
        for (var i = 0; i < 101; i++) {
            if ((i % 7) == 0) {
                numeros = numeros + "\n";
            }
            numeros = numeros + i + ",";
        }
        console.log(numeros)
    }
    lineas()
}()
