let init = function() {
    let array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    let mostrar = function(argu) {
        let content = document.getElementById("contenido");
        content.innerHTML += argu + "<br>";
    }
    let borrarDuplicados = function(argu) {
        let array2 = [];
        array2 = argu.filter(
            function(registros, posicion) {
                return argu.indexOf(registros) == posicion;
            }
        );
        return array2;
    }
    mostrar("Mi array: " + array)
    array.push(4);
    mostrar("Añadir al final: " + array);
    mostrar("Array sin duplicados: " + borrarDuplicados(array));
}
window.onload = init;
