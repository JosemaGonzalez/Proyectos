{
    $(document).ready(function() {
        $(document).mousemove(function(e) {
            $("main").html("X: " + e.pageX + " - Y: " + e.pageY)
        });
    })
}
