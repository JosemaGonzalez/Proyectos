function unaVentana() {
    let ventana = window.open("", "", "height=200,width=300,top=0,left=0");
    ventana.document.write("<html>" +
        "<head>" +
        "<title>Ventana de Prueba Josema</title>" +
        "</head>" +
        "<body>" +
        "<p>Se han utilizado las siguientes propiedades:</p>" +
        "<ul>" +
        "<li>height=200</li>" +
        "<li>width=300</li>" +
        "</ul>" +
        "</body>" +
        "</html>");
    ventana.document.close();
}

window.addEventListener("load", function() {
    document.getElementById("boton").addEventListener("click", unaVentana);
});
