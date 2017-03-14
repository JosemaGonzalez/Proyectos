{
    jQuery.fn.miPlugin = function() {
        mivariableComun = "comun";
        alert("Nueva invocación de plugin. Mi variable común: " + mivariableComun)
        this.each(function() {
            elem = $(this);
            let miVariable = "x";

            function miFuncion() {
                miVariable = elem.text();
                alert("mi variable local y particular de cada plugin: " + miVariable);
                mivariableComun = "Otra cosa comun!"
            }

            miFuncion();
            elem.click(function() {
                alert("Dentro del evento: " + miVariable);
                miFuncion();
            });
        });
    };
    $(document).ready(function() {
        $("#esteDiv").miPlugin();
        $(".misspan").miPlugin();
    })
}
