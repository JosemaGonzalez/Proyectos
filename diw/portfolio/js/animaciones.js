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

});