jQuery(function($) {
	let alto = $("#cara").height()+$("#titulo").height();
	let ancho = $("#cara").width();
	$("#cruz").height(alto);
	$("#cruz").width(ancho);
	$("#cruz").css("opacity", "0");
	$("#vuelta").click(function() {
		$("#cara").removeClass("flipInY animated");
		$("#cruz").removeClass("flipOutY animated");
		$("#cara").toggleClass("flipOutY animated");
		$("#cara").css("opacity", "0");
		$("#cara").css("z-index", "10");
		$("#cruz").css("z-index", "20");
		$("#cruz").css("opacity", "1");
		$("#cruz").toggleClass("flipInY animated");
	});
	$("#vuelta2").click(function() {
		$("#cruz").removeClass("flipInY animated");
		$("#cara").removeClass("flipOutY animated");
		$("#cruz").toggleClass("flipOutY");
		$("#cruz").css("opacity", "0");
		$("#cara").css("z-index", "20");
		$("#cruz").css("z-index", "10");
		$("#cara").css("opacity", "1");
		$("#cara").toggleClass("flipInY animated");
	});
});
