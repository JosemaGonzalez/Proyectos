<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
require_once 'clases/grupos.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']!="PRO") {
	header("Location: index.php");
}
$grupos= grupos::singleton();
$grupo=$grupos->get_grupos();
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
				foreach ($grupo as $key => $value) {
					echo '<div class="col s6 m3">';
					echo '<br>';
					echo "<a href=\"fichaProfesorAlumno.php?grupo=".base64_encode($value[0])."\" class=\"waves-effect waves-light btn indigo darken-1\">".$value[0]."<br/>"."</a></div>";
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php
include 'includes/footer.php';
?>
