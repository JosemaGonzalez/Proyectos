let init = function() {
    let mostrar = function() {
        let content = document.getElementById("contenido");
        content.innerHTML = "window.scrollX= " + window.scrollX + "<br>";
        content.innerHTML += "window.scrollY= " + window.scrollY + "<br>";
        content.innerHTML += "window.scrollbars= " + window.scrollbars.visible + "<br>";
    }
    window.addEventListener("scroll", mostrar);
}
window.onload = init;
