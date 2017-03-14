let cincoVentanas = function() {
    for (var i = 0; i < 5; i++) {
        let ventana = window.open("", "", 'height=200,width=200,top=' + (i * 50) + ',left=' + (i * 50) + "");
        ventana.document.write("<html>" +
            "<head>" +
            "<title>Ventana"+i+" Josema González</title>" +
            "<script type='text/javascript' src='cerrar.js'></script>" +
            "</head>" +
            "<body>" +
            "Ventana "+i+"<input type='button' id='Cerrar' value='Cerrar'>" +
            "</body>" +
            "</html>");
        ventana.document.close();
    };
}

window.addEventListener("load", function() {
    document.getElementById("boton").addEventListener("click", cincoVentanas);
});
