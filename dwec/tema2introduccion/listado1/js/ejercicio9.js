let a = function() {
    function hora() {
        let elemento = prompt("Inserte un horario");
        let hora = new Date(elemento);
        console.log(hora.toLocaleString())
    }
    hora()
}()
