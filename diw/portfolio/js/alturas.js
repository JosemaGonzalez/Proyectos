$(document).ready(function() {
    /*altura cajas normales*/
    let ventana_alto = $(window).height();
    /*altura cajas de sobre mi*/
    let ventana_alto2 = ventana_alto/4.3;
    $("main>div").height(ventana_alto);
    $(".izda,.drcha").height(ventana_alto2);
    $(".sobreizda,.sobredrcha").css("max-height", ventana_alto2/3);
    $(".sobreizda,.sobredrcha").css("min-height", ventana_alto2/3);
    $("#sobremi .izda,#sobremi .drcha").height(ventana_alto/2.8);
    $("#mistrabajos .izda a,#mistrabajos .drcha a").height(ventana_alto2/2);
    /*Centrar la caja del ancla*/
    let ventana_centro = $(window).width()/20;
    $(".centro").css("right", ventana_centro);
    $(".centro").css("left", ventana_centro);
    /*Dispositivos pequeños*/
    if ($(window).height() < "550") {
        $("#sobremi .izda,#sobremi .drcha").css("margin","1px auto");
        $(".sobreizda,.sobredrcha").css("max-height", ventana_alto2/3.5);
        $(".sobreizda,.sobredrcha").css("min-height", ventana_alto2/3.5);
        $(".centro img").css("width", "40px");
        $("#mistrabajos .izda,#mistrabajos .drcha").css("min-width","44.5%");
        $("#mistrabajos .izda,#mistrabajos .drcha").css("margin","2px");
        $("#mistrabajos .izda").css("float","left");
        $("#mistrabajos .drcha").css("float","right");
        $("#mistrabajos .izda a,#mistrabajos .drcha a").height(ventana_alto2/1.6);

    }
    if ($(window).height() < "550" || $(window).width() < "350") {
        $(".apt img").css("margin", "0");
        $(".apt div").css("max-width", "45px");
        $(".apt div").css("max-height", "45px");
        $(".apt div").css("top", "0");
        $("#sobremi h4").css("margin-bottom", "1%");
        $(".apt").css("margin-top", "2%");
        $(".centro2").css("margin-top", "5%");
        $(".apt").css("width", "24%");
        $(".pro span").css("font-size", "0.8em");
        $(".pro span").css("top", "9%");

    }else{
        $(".pro span").css("top", "15%");
    }
    /*Tablet*/
    if ($(window).width() >= "768") {
        $("#sobremi .izda,#sobremi .drcha").height(ventana_alto/3);
        $(".sobreizda,.sobredrcha").css("max-height", ventana_alto2/3.2);
        $(".sobreizda,.sobredrcha").css("min-height", ventana_alto2/3.2);
        $("#mistrabajos .izda a,#mistrabajos .drcha a").height(ventana_alto2/2.7);

    }
    /*PC pequeño*/
    if ($(window).width() >= "1024") {
        $(".sobreizda,.sobredrcha").css("max-height", ventana_alto2/2.5);
        $(".sobreizda,.sobredrcha").css("min-height", ventana_alto2/2.5);
        $("#sobremi .izda,#sobremi .drcha").height(ventana_alto/2);
        $("#mistrabajos .izda a,#mistrabajos .drcha a").height(ventana_alto2/3);

    }
    /*PC grande*/
    if ($(window).width() >= "1400") {
        $("#sobremi .izda,#sobremi .drcha").height(ventana_alto/2.4);
    }
});
