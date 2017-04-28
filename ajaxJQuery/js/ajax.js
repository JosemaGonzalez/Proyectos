$(document).ready(function() {
	var url=$("#recurso");
	var contenido=$("#contenidos");
	var cabeceras=$("#cabeceras");
	var estado=$("#estados");
	var codigo=$("#codigo");
	var boton=$("#enviar");
 
	boton.click(function() {
		estado.text("");
		$.get(url.val(), function(data) {
			contenido.text(data);
		}).done(function() {
	    	estado.text(estado.val()+"1. Abierta\n");
	    }).then(function() {
	    	estado.text(estado.val()+"3. Cargando\n");	    
	  	}).always(function() {
	    	estado.text(estado.val()+"4. Completada\n");
	  	}).fail(function() {
	    	estado.text(estado.val()+"Error\n");
	    	contenido.text("Esa página no existe");
	  	});
	  	

	});

	url.val(location).attr("href");
});