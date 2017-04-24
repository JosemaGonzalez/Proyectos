{
    $(document).ready(function() {

        $("#letter-container p a").lettering();
        $("#vermas,#vermas1,#vermas2,#vermas3").hide();
        $("#menu").click(function(event) {
            event.preventDefault();
            $("#nav").fadeIn(1000);
            $("#menu").css("display", "none");
            $("#nav").css("display", "block");
        });
        $("#ver").click(function(event) {
            event.preventDefault();
            $(this).hide(50);
            $("#vermas").show(500);
        });
        $("#ver1").click(function(event) {
            event.preventDefault();
            $(this).hide(50);
            $("#vermas1").show(500);
        });
        $("#ver2").click(function(event) {
            event.preventDefault();
            $(this).hide(50);
            $("#vermas2").show(500);
        });
        $("#ver3").click(function(event) {
            event.preventDefault();
            $(this).hide(50);
            $("#vermas3").show(500);
        });
        $("#cerrar").click(function(event) {
            $("#vermas").hide();
            $("#ver").show(500);
        });
        $("#cerrar1").click(function(event) {
            $("#vermas1").hide();
            $("#ver1").show(500);
        });
        $("#cerrar2").click(function(event) {
            $("#vermas2").hide();
            $("#ver2").show(500);
        });
        $("#cerrar3").click(function(event) {
            $("#vermas3").hide();
            $("#ver3").show(500);
        });

        $("main,h1,#nav,aside").click(function(event) {
            $("#menu").fadeIn(1000);
            $("#menu").css("display", "block");
            $("#nav").css("display", "none");

        });
    });
}
