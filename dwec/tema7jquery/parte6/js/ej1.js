{
    $(document).ready(function() {
        $(".mienlace").click(function(e) {
            e.preventDefault();
            alert("Has hecho clic\nComo he hecho preventDefault, no te llevaré al href");
        });
    })
}
