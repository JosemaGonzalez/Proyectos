<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']!="PRO"||!isset($_GET['alu'])) {
	header("Location: index.php");
}

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap-material-datetimepicker.css">
<script src="js/moment.js" type="text/javascript" charset="utf-8"></script>
<script src="js/bootstrap-material-datetimepicker.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function() {
		var now = new Date();
		$('.timepicker').bootstrapMaterialDatePicker();

		$('.datepicker').pickadate({
			selectMonths: true,
			selectYears: 15,
			labelMonthNext: 'Mes siguiente',
			labelMonthPrev: 'Mes anterior',
			labelMonthSelect: 'Selecciona un mes',
			labelYearSelect: 'Selecciona un año',
			monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
			monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
			weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
			weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],
			weekdaysLetter: [ 'D', 'L', 'M', 'X', 'J', 'V', 'S' ],
			formatSubmit: 'yyyy-mm-dd HH:MM:ss',
			format: 'dd//mm/yyyy '+ now.getHours()+':'+now.getMinutes()+':'+now.getSeconds(),
			today: 'Hoy',
			clear: 'Limpiar',
			close: 'Cerrar',
			firstDay: true
		});

	});
</script>
<div class="row center" style="border-radius: 2%;">
	<div class="col s12 center">
		<h4>Añadir Parte</h4>
	</div>
	<div class="col s12">
		<div class="row">
			<form action="crearParte.php" method="post" accept-charset="utf-8">
				<div class="col s6 m4">
					<input type="date" class="datepicker" id="fecha" placeholder="Fecha">
				</div>
				<div class="col s6 m4">
					<input type="date" class="datepicker" id="fechaComunicacion" placeholder="Fecha Comunicación">
				</div>
				<div class="col s6 m4">
					<input type="date" class="datepicker" id="fechaConfirmacion" placeholder="Fecha Confirmación">
				</div>
				<div class="input-field col s12 m6">
					<textarea id="textarea1" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="textarea1">Descripción</label>
				</div>
				<div class="input-field col s12 m6">
					<textarea id="textarea" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="textarea">Tareas</label>
				</div>
				<div class="col s6 m4">
					<input type="text" class="timepicker" id="fechaConfirmacion" placeholder="Fecha Confirmación">
				</div>
			</form>
		</div>
	</div>
</div>

<?php
include 'includes/footer.php';
?>
