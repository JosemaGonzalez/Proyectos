{
    //JOSEMA GONZALEZ
    $(document).ready(function() {
        $('form p').addClass('has-error');

        $.validate({
            lang: 'es',
            modules: 'date'
        });
        $('#reset').on('click', function() {
            $('form p').addClass('has-error');
            $('#enviar').prop('disabled', true);
        });
        $('#enviar').on('click keyup', function() {
            $nombre = $('#nombre').val();
            $dni = $('#dni').val();
            $fecha = $('#fecha').val();
            let empleado = new Empleado($nombre, $fecha, $dni);
            empleado.crearNuevaVentana();
        });

        $('form input').on('keyup blur click', function() {
            if ($('form p').hasClass('has-error')) {
                $('#enviar').prop('disabled', 'disabled');
            } else {
                $('#enviar').prop('disabled', false);
            }
        });


    });

}
