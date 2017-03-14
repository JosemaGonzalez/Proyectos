let a = function() {
    let letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    let dni = parseInt(prompt("Introduce tu dni (sólo los numeros)"));
    if (isNaN(dni) || dni <= 0 || dni > 99999999) {
        alert("El número no es válido");
        return;
    } else {
        let letra = prompt("Introduce tu letra");
        if (letra == null || letra.length == 0 || letra.length > 1 || /^\s+$/.test(letra)) {
            alert("La letra no es válida");
            return;
        } else {
            let num = dni % 23;
            alert("Su letra es: " + letras[num]);
            if (letras[num] == letra.toUpperCase()) {
                alert("Coincide la letra")
            } else {
                alert("No coincide")
            }
        }
    }
}()
