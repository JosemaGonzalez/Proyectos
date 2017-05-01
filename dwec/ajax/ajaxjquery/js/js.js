{
	$(document).ready(function() {
		let pagina=$("#recurso");
		let cabeceras=$("#cabeceras");
		let contenidos=$("#contenidos");
		let enviar=$("#enviar");
		let estados=$("#estados");
		let codigo=$("#codigo");
		pagina.val(location).attr("href");

		let tiempoInicial=0;

		let calculo = function(){
			tiempoFinal = new Date();
			milisegundos = tiempoFinal - tiempoInicial;
			return "[" + milisegundos + " mseg] ";
		}
		let escribir = function(xhr){
			codigo.text(xhr.readyState);
			estados.text(xhr.status + ": "+ xhr.statusText + "\n"+calculo());
			cabeceras.text(xhr.getAllResponseHeaders);
		}

		enviar.click(function(){
			tiempoInicial = new Date();
			$.ajax({
				url: pagina.val(),
				type: "GET",
				dataType: "text",
				error: function (xhr){
					contenidos.text("Error\nNo se encuentra la página");
					escribir(xhr);
				}
			})
			.done(function(data,textStatus,xhr){
				contenidos.text(data);
				escribir(xhr);
			})
			.fail(function(xhr){
				escribir(xhr);
			});
		});

	});
}
