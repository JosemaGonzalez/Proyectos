let a = function() {

    function lineasdos() {
        let numeros = "";
        for (var i = 0; i < 101; i++) {
            if ((i % 7) == 0 || (i.toString().charAt(1)) == 7) {
                numeros = numeros + "\n";
            }
            numeros = numeros + i + ",";
        }
        console.log(numeros)
    }
    lineasdos()
}()
