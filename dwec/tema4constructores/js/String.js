let init = function() {
    let cadena = "Hola JavaScript, que divertido eres";
    let mostrar = function(argu) {
        let content = document.getElementById("contenido");
        content.innerHTML += argu + "<br>";
    }
    let recortar = function(cad, num) {
        let cadena2 = cad.slice(0, num);
        return cadena2;
    }
    let reemplazar = function(cad, orig, reem) {
        let cad2 = cad.replace(orig, reem);
        return cad2;
    }
    mostrar("Cadena original: " + cadena);
    mostrar("Cadena recortada: " + recortar(cadena, 15))
    mostrar("Cadena reemplazada: " + reemplazar(cadena,"JavaScript","Josema"))

}
window.onload = init;
