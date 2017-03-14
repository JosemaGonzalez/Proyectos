{
    $(document).ready(function() {
        function colaEfectos() {
            let capa = $("#micapa");
            capa.slideUp(1000)
                .delay(2000)
                .slideDown(1000)
                .delay(2000)
                .fadeTo(1500, 0.3)
                .delay(1000)
                .fadeTo(500, 1)
                .animate({
                    "font-size": "+=2em"
                }, 1000, colaEfectos);
        }

        colaEfectos();
    });
}
