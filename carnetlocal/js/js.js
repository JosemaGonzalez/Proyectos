jQuery(function($) {
	let alto = $("#cara").height()+$("#titulo").height();
	let ancho = $("#cara").width();
	$("#cruz,#cruz2").height(alto);
	$("#cruz,#cruz2").width(ancho);
	$("#cruz,#cruz2").css("opacity", "0");
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
	$("#vuelta3").click(function() {
		$("#cara").removeClass("flipInY animated");
		$("#cruz2").removeClass("flipOutY animated");
		$("#cara").toggleClass("flipOutY animated");
		$("#cara").css("opacity", "0");
		$("#cara").css("z-index", "10");
		$("#cruz2").css("z-index", "20");
		$("#cruz2").css("opacity", "1");
		$("#cruz2").toggleClass("flipInY animated");
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
	$("#vuelta4").click(function() {
		$("#cruz2").removeClass("flipInY animated");
		$("#cara").removeClass("flipOutY animated");
		$("#cruz2").toggleClass("flipOutY");
		$("#cruz2").css("opacity", "0");
		$("#cara").css("z-index", "20");
		$("#cruz2").css("z-index", "10");
		$("#cara").css("opacity", "1");
		$("#cara").toggleClass("flipInY animated");
	});
});
