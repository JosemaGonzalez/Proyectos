$(document).ready(function() {

	let ventana_alto = $(window).height();
	let ventana_alto2 = ventana_alto/4.3;
    $("main>div").height(ventana_alto);
    $(".izda,.drcha").height(ventana_alto2);
    $(".sobreizda,.sobredrcha").css("max-height", ventana_alto2/3);
    $(".sobreizda,.sobredrcha").css("min-height", ventana_alto2/3);
    $("#sobremi .izda,#sobremi .drcha").height(ventana_alto/2.8);
    $("#mistrabajos .izda a,#mistrabajos .drcha a").height(ventana_alto2/2);
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
    let ventana_centro = $(window).width()/4;
    $(".centro").css("right", ventana_centro);
    $(".centro").css("left", ventana_centro);
    $('.ancla').click(function(e) {
      e.preventDefault();
      let strAncla = $(this).attr('href');
      $('body,html').stop(true, true).animate({
         scrollTop: $(strAncla).offset().top
     }, 1000);

  });

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
    if ($(window).height() < "550" || $(window).width() < "380") {
        $(".apt img").css("width", "35px");
        $(".apt img").css("margin", "0");
        $(".apt div").css("width", "35px");
        $(".apt div").css("height", "35px");
        $(".apt div").css("top", "0");
        $("#sobremi h4").css("margin-bottom", "3%");
        $(".apt").css("margin-top", "0");
        $(".apt").css("width", "33%");
    }
    if ($(window).width() > "768") {
        $("#sobremi .izda,#sobremi .drcha").height(ventana_alto/3);
        $(".sobreizda,.sobredrcha").css("max-height", ventana_alto2/3.2);
        $(".sobreizda,.sobredrcha").css("min-height", ventana_alto2/3.2);
    }

    if ($(window).width() > "1024") {
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

});
