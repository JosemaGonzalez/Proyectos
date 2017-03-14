function cerrar() {
    window.close();
}

window.addEventListener("load", function() {
    document.getElementById("Cerrar").addEventListener("click", cerrar);
});
