{
    $(document).ready(function() {
        let diff, last = 0;
        $("html").mousemove(function(evento) {
            $("span").html(" pageX : " + evento.pageX + " pageY: " + evento.pageY);
        });

        $("button").click(function(event) {
            diff = event.timeStamp - last;
            $("div").append("TimeStamp: " + diff + " ms </br>");
            last = event.timeStamp;

            if (event.currentTarget === this) {
                $("p").html("currentTarget: " + $(this).html());
            }
        });
    });
}
