{
    $(document).ready(function() {
        $("#ocultar").click(function(event) {
            event.preventDefault();
            $("#capaefectos").hide("fast");
        });
        $("#mostrar").click(function(event) {
            event.preventDefault();
            $("#capaefectos").show(5000);
        });
    });
}
