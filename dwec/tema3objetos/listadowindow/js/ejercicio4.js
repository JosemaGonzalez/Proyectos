let init = function() {
    let mostrar = function(argu) {
        let content = document.getElementById("contenido");
        content.innerHTML += argu + "<br>";
    }
    let url = function() {
        mostrar("Servidor: " + window.location.host);
        mostrar("Protocolo: " + window.location.protocol);
        mostrar("Ruta: " + window.location.pathname);
        mostrar("Puerto: " + window.location.port);
    }
    url();
}
window.onload = init;
