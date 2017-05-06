jQuery(function($) {
    if ($(window).width() >= "1024") {
        $(".oculto").css("display", "none");
        $("header ul").css("display", "block");
        $("#rural a").hide("fast");
        $("#rural").on("mouseover focus",function(){
            $("#rural a").show("fast");
        });
        $("#rural").on("mouseleave",function(){
            $("#rural a").hide("slow");
        });
        $("#hermandad a").hide("fast");
        $("#hermandad").on("mouseover focus",function(){
            $("#hermandad a").show("fast");
        });
        $("#hermandad").on("mouseleave",function(){
            $("#hermandad a").hide("slow");
        });
        $("#salvador a").hide("fast");
        $("#salvador").on("mouseover focus",function(){
            $("#salvador a").show("fast");
        });
        $("#salvador").on("mouseleave",function(){
            $("#salvador a").hide("slow");
        });
        $("#tareas a").hide("fast");
        $("#tareas").on("mouseover focus",function(){
            $("#tareas a").show("fast");
        });
        $("#tareas").on("mouseleave",function(){
            $("#tareas a").hide("slow");
        });
        $("#sabio a").hide("fast");
        $("#sabio").on("mouseover focus",function(){
            $("#sabio a").show("fast");
        });
        $("#sabio").on("mouseleave",function(){
            $("#sabio a").hide("slow");
        });
        $("#aceituna a").hide("fast");
        $("#aceituna").on("mouseover focus",function(){
            $("#aceituna a").show("fast");
        });
        $("#aceituna").on("mouseleave",function(){
            $("#aceituna a").hide("slow");
        });
    }
    if ($(window).width() < "1024") {
        $(".oculto").click(function(event) {
          event.preventDefault();
          $("header ul").fadeIn(500);
          $(".oculto").css("display", "none");
          $("header ul").css("display", "block");
      });
        $("main,li a").click(function(event) {
          $(".oculto").fadeIn(500);
          $(".oculto").css("display", "block");
          $("header ul").css("display", "none");

      });
    }
    $('.ancla').click(function(e) {
      e.preventDefault();
      let strAncla = $(this).attr('href');
      $('body,html').stop(true, true).animate({
       scrollTop: $(strAncla).offset().top}, 1000);
    });
    $('.svg').svgprogress({
        figure: "hexagon",
        progressFillGradient: ['#FAEB69','#5ECA50'],
        progressWidth: 4,
        unitsOutput: '%',
        endFill: 90
    });
    $('.svg1').svgprogress({
        figure: "hexagon",
        progressFillGradient: ['#FAC369','#41AD49'],
        progressWidth: 4,
        unitsOutput: '%',
        endFill:80
    });
    $('.svg2').svgprogress({
        figure: "hexagon",
        progressFillGradient: ['#FAC369','#41AD49'],
        progressWidth: 4,
        unitsOutput: '%',
        endFill: 70
    });
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
