{
	$(document).ready(function() {
		let input = $("#input");
		let contenido = $("#coincidencias");

		input.keyup(function(){
			$.ajax({
				url: "nombres.php?cad="+input.val(),
				type: "GET",
				dataType: "text",
				error: function (xhr){
					contenidos.text("Error\nNo se encuentran coincidencias");
				}
			})
			.done(function(data,textStatus,xhr){
			})
			.fail(function(xhr){

			});
		});
	});
}
