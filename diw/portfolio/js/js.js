$(document).ready(function() {
	let ventana_alto = $(window).height();
	let ventana_alto2 = ventana_alto/4.3;
    $("main>div").height(ventana_alto);
     $(".izda,.drcha").height(ventana_alto2);
    $(".sobreizda,.sobredrcha").css("max-height", ventana_alto2/2.8);
    $(".sobreizda,.sobredrcha").css("min-height", ventana_alto2/2.8);
    $("#sobremi .izda,#sobremi .drcha").height(ventana_alto/3);
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
    if ($(window).width() > "768") {
    	$(".oculto").css("display", "none");
    	$("header ul").css("display", "block");
    }
    if ($(window).width() < "768") {
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
