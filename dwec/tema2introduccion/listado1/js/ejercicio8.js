let a = function() {
    function fecha() {
        let elemento = prompt("Inserte una fecha mm/dd/aaaa");
        let fecha = new Date(elemento);
        console.log(fecha.toLocaleString())
    }
    fecha()
}()
