jQuery(function($) {
    $(".izda").css("opacity", "0");
    $('.izda').waypoint(function() {
        $(this).toggleClass( 'bounceInLeft animated' );
        $(".izda").css("opacity", "1");
    },
    {
        offset: '90%',
        triggerOnce: true
    });
    $(".drcha").css("opacity", "0");
    $('.drcha').waypoint(function() {
        $(this).toggleClass( 'bounceInRight animated' );
        $(".drcha").css("opacity", "1");
    },
    {
        offset: '90%',
        triggerOnce: true
    });
    $(".pro").css("opacity", "0");
    $('.pro').waypoint(function() {
        $(this).toggleClass( 'bounceInRight animated' );
        $('.pro').trigger("redraw");
        $(".pro").css("opacity", "1");
    },
    {
        offset: '100%',
        triggerOnce: true
    });

    $("#inicio").css("opacity", "0");
    $('#inicio').waypoint(function() {
        $(this).toggleClass( 'bounceInDown animated' );
        $("#inicio").css("opacity", "1");
    },
    {
        offset: '80%',
        triggerOnce: true
    });
    $("h1").css("opacity", "0");
    $('h1').waypoint(function() {
        $(this).toggleClass( 'lightSpeedIn animated' );
        $("h1").css("opacity", "1");
    },
    {
        offset: '50%',
        triggerOnce: true
    });
    $("h2").css("opacity", "0");
    $('h2').waypoint(function() {
        $(this).toggleClass( 'lightSpeedIn animated' );
        $("h2").css("opacity", "1");
    },
    {
        offset: '50%',
        triggerOnce: true
    });
    $(".centro2>span a img").css("opacity", "0");
    $('.centro2>span a img').waypoint(function() {
        $(this).toggleClass( 'animated rollIn' );
        $(".centro2>span a img").css("opacity", "1");
    },
    {
        offset: '100%',
        triggerOnce: true
    });
    $(".centro,.made").css("opacity", "0");
    $('.centro,.made').waypoint(function() {
        $(this).toggleClass( 'animated zoomInDown' );
        $(".centro,.made").css("opacity", "1");
    },
    {
        offset: '100%',
        triggerOnce: true
    });

});
