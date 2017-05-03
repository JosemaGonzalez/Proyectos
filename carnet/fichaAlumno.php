<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
require_once 'clases/alumnos.php';
require_once 'clases/partes.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']=="invitado") {
	header("Location: index.php");
}
$alumno=alumnos::singleton();
$partes=partes::singleton();
if (isset($_GET['alu'])) {
	$_SESSION['idAlu'] = base64_decode($_GET['alu']);
	$al=$alumno->get_alumno($_SESSION['idAlu']);
	$par=$partes->get_partes($_SESSION['idAlu']);
}
else{
	$al=$alumno->get_alumno($_SESSION['id']);
	$par=$partes->get_partes($_SESSION['id']);
}
?>
<script src="js/js.js" type="text/javascript" charset="utf-8"></script>
<div class="col s12 center" id="titulo">
	<h4>Carnet de convivencia</h4>
</div>
<div class="row center" style="position: absolute;" id="cara">
	<div class="col s3">
		<?php
		echo'<img src="images/'.$al[3].'" alt="" class="circle responsive-img">';
		?>
	</div>
	<div class="col s6">
		<div class="row left-align">
			<div class="col s12">
				<h5>

					<?php
					echo $al[1].' '.$al[2].', '.$al[0];
					?>
				</h5>
			</div>

			<div class="col s12">
				<h5>
					<?php
					echo $al[5];
					?>
				</h5>
			</div>
		</div>
	</div>
	<div class="col s3">
		<div class="col s12">
			<?php
			calcularColor($al[4]);
			?>
		</div>
	</div>
	<div class="col s12">
		<div class="row">
			<div class="col s3 left" id="vuelta">
				<button type="button" class="btn-floating btn-large waves-effect waves-light indigo lighten-1"><i class="material-icons">autorenew</i></button>
			</div>
			<?php
			cargarBotonParte();
			?>
		</div>
		<div class="row">
			<?php
			cargarBotonAtras();
			?>
		</div>
	</div>
</div>
</div>
<div id="cruz" style="position: absolute;" class="row center">
	<div class="col s12">
		<?php
		foreach ($par as $key => $value){
			echo "<div class=\"row\">";
			echo "<p class='left-align'>Fecha: ". $value[0]."</p>";
			echo "<p class='left-align'>Descripción: ". $value[1]."</p>";
			echo "<p class='left-align'>Observaciones: ". $value[2]."</p>";
			echo "<p class='left-align'>Puntos: ". $value[3]."</p>";
			echo "</div><hr>";
		}
		?>
	</div>
	<div class="col s12">
		<div class="row">
			<div class="col s3 left" id="vuelta2">
				<button type="button" class="btn-floating btn-large waves-effect waves-light indigo lighten-1"><i class="material-icons">autorenew</i></button>
			</div>
			<?php
			cargarBotonParte();
			?>
		</div>
	</div>
</div>
<?php
include 'includes/footer.php';
?>
