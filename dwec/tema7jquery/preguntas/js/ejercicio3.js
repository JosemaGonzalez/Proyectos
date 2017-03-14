{
    $(document).ready(function() {
        let resultado = $("p");
        $("button").bind("click", function(evento) {
            resultado.html("Has hecho click");
        })
         $("input").bind("dblclick", function(evento) {
            resultado.html("Has hecho doble click");
        })
        $("div").bind("mouseenter mouseleave", function(evento) {
            switch (evento.type) {
                case "mouseenter":
                    resultado.html("Ratón en el div");
                    break;
                case "mouseleave":
                    resultado.html("Ratón fuera del div");
                    break;
            }
        })
    });
}
