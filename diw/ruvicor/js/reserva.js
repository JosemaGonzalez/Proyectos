{
	$(document).ready(function() {

		var dateFormat = "dd/mm/yy",
		from = $( "#finicio" )
		.datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 1
		})
		.on( "change", function() {
			to.datepicker( "option", "minDate", getDate( this ) );
		}),
		to = $( "#ffin" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 1
		})
		.on( "change", function() {
			from.datepicker( "option", "maxDate", getDate( this ) );
		});
		$.datepicker.regional['es'] = {
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
			weekHeader: 'Sm',
			dateFormat: 'dd/mm/yy',
			firstDay: 1,
			isRTL: false,
			showMonthAfterYear: false,
			minDate: "0D"
		};
		$.datepicker.setDefaults($.datepicker.regional['es'])
		function getDate( element ) {
			var date;
			try {
				date = $.datepicker.parseDate( dateFormat, element.value );
			} catch( error ) {
				date = null;
			}

			return date;
		}

		$('form p').addClass('has-error');

		$.validate({
			lang: 'es',
			modules: 'date'
});
		$('#reset').on('click', function() {
			$('form p').addClass('has-error');
			$('#enviar').prop('disabled', true);
		});

		$('form input').on('keyup blur click', function() {
			if ($('form p').hasClass('has-error')) {
				$('#enviar').prop('disabled', 'disabled');
			} else {
				$('#enviar').prop('disabled', false);
			}
		});

		if (navigator.cookieEnabled) {
			$("#nombre").val($.cookie("nombre"));
			$("#email").val($.cookie("email"));
			$("#finicio").val($.cookie("finicio"));
			$("#ffin").val($.cookie("ffin"));
			$("#telefono").val($.cookie("telefono"));
			$("#personas").val($.cookie("personas"));
			$("#enviar").click(function() {
				$.cookie("nombre",$("#nombre").val(),{expires:365});
				$.cookie("email",$("#email").val(),{expires:365});
				$.cookie("finicio",$("#finicio").val(),{expires:365});
				$.cookie("ffin",$("#ffin").val(),{expires:365});
				$.cookie("telefono",$("#telefono").val(),{expires:365});
				$.cookie("personas",$("#personas").val(),{expires:365});
			});
		}
	});
}
