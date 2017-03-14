{
    $(document).ready(function() {
        $("#enlaceajax").click(function(evento) {
            evento.preventDefault();
            $("#destino").load("recibe-parametros.php", { nombre: "Josema", edad: 22 }, function() {
                alert("recibidos los datos por ajax");
            });
        });
    });
}
