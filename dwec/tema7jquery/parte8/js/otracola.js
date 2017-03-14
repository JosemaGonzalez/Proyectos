{
    $(document).ready(function() {
        function ocultaMuestra() {
            let capa = $("#micapa");
            capa.fadeTo(500, 0.3)
                .fadeTo(1200, 1)
                .animate({
                    "left": "350px"
                }, 1000)
                .animate({
                    "left": "100px"
                }, 800, ocultaMuestra);
        }

        function cambiarColores() {
            let capa = $("#micapa");
            capa.delay(1000, "micola");
            capa.queue("micola", function(sig) {
                $(this).css({
                    "background-color": "#339"
                });

                sig()
            });
            capa.delay(1000, "micola");
            capa.queue("micola", function(sig) {
                $(this).css({
                    "background-color": "#933"
                });
                sig();
            });
            capa.delay(1000, "micola");
            capa.queue("micola", function() {
                $(this).css({
                    "background-color": "#393"
                });
                cambiarColores();
            });
            capa.dequeue("micola");
        }

        $("#botontamanocola").click(function() {
            let div = $("<div><p>La cola predeterminada tiene " + $("#micapa").queue().length + " procesos</p><p>La otra cola tiene " + $("#micapa").queue("micola").length + " procesos</p></div>");
            $("#mensaje").html(div);
        });

        ocultaMuestra();
        cambiarColores();

    });
}
