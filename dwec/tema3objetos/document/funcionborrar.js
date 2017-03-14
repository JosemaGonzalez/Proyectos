function eliminarElemento(id) {
    imagen = document.getElementById(id);
    if (imagen) {
        padre = imagen.parentNode;
        padre.removeChild(imagen);
    }
}
