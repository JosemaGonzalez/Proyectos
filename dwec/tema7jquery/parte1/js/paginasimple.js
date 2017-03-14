{
    $(document).ready(function() {
        $('a').click(function(event) {
            alert("Has pulsado el enlace, pero vamos a cancelar el evento... Por tanto, no vamos a llevarte a DesarrolloWeb.com");
            event.preventDefault();
        });
    });
}
