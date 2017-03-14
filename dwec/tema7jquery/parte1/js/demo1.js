{
    $(document).ready(function() {
        $('#a').click(function(event) {
            $('#capa').html('Has hecho clic en el botón<b>A</b>');
        });
        $('#b').click(function(event) {
            $('#capa').html('Recibido un clic en el botón<b>B</b>');
        });
    });
}
