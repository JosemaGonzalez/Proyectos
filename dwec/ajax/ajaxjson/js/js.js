{
	$(document).ready(function() {
		let botonA = $("#botonA");
		let botonV =$("#botonV");
		let botonJ = $("#botonJ");

		let pulsar = function(fichero){
			$.getJSON( fichero , function( data ) {
			});
		}

		botonA.click(function(){
			pulsar("json/aceite.json");
		});
		botonV.click(function(){
			pulsar("json/jamones.json");

		});
		botonJ.click(function(){
			pulsar("json/vinos.json");

		});
	});
}
