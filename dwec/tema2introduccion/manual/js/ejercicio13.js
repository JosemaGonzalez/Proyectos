function anade() {
    var elemento = document.createElement("li");
    var texto = document.createTextNode("ejemplo");
    elemento.appendChild(texto);
    var lista = document.getElementById("lista");
    lista.appendChild(elemento);
    lista.innerHTML;
}
