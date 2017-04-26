<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
require_once 'clases/alumnos.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']!="PRO") {
	header("Location: index.php");
}
$alumnos= alumnos::singleton();
$profealum=$alumnos->get_alumnosgrupo(base64_decode($_GET['grupo']));
$_SESSION['grupo']=base64_decode($_GET['grupo']);
?>
<div class="row center" style="border-radius: 2%;">
	<div class="col s12 center">
		<h4>Carnet de convivencia</h4>
	</div>
	<div class="col s12">
		<div class="row">
			<div class="col s12">
				<?php
				?>
				<?php
				foreach ($profealum as $key => $value) {
					echo '<div class="col s12 m6">';
					echo '<br>';
					echo "<a href=\"fichaAlumno.php?alu=".base64_encode($value[0])."\" class=\"waves-effect waves-light btn indigo darken-1\">".$value[1]." ".$value[2]." ".$value[3]."<br/>"."</a></div>";
				}

				?>
			</div>
			<div class="col s3 left" id="vuelta">
			<br>
				<form action="fichaProfesor.php" method="post" accept-charset="utf-8">
					<button type="submit" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></button>
				</form>
			</div>


		</div>
	</div>
</div>
<?php
include 'includes/footer.php';
?>
