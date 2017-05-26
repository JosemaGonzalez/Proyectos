<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
require_once 'clases/rTutoresLegales.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']!="TUT") {
	header("Location: index.php");
}
$tutores = rtutoreslegales::singleton();
$alumnos =$tutores->get_alumnostutor($_SESSION['id']);
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
				foreach ($alumnos as $key => $value) {
					echo '<div class="col s12 m6">';
					echo '<br>';
					echo "<a href=\"fichaAlumno.php?alu=".base64_encode($value[0])."\" class=\"waves-effect waves-light btn indigo darken-1\">".$value[1]." ".$value[2]." ".$value[3]."<br/>"."</a></div>";
				}

				?>
			</div>
		</div>
	</div>
</div>
<?php
include 'includes/footer.php';
?>
