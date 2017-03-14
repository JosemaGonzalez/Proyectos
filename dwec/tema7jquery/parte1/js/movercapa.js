{
    $(document).ready(function() {

        $("#pilallamadas").click(function(event) {
            event.preventDefault();
            $("#micapa").fadeOut(1000, function() {
                $("#micapa").css({ 'top': Math.floor((Math.random() * 500) + 1), 'left': Math.floor((Math.random() * window.screenX / 2) + 1) });
                $("#micapa").fadeIn(1000);
            });
        });

    });
}
