{
	$(document).ready(function() {
		let input = $("input");
		input.click(deshabilitar);

		function deshabilitar(){
			input.each(function(){
				if ($(this).prop("checked") ==false) {
					$(this).prop("disabled","true");
				}
			});

			if ($("input:disabled").length == input.length){
				input.prop("disabled",false);
			}

		}
	});
}
