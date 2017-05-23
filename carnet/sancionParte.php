<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']!="PRO"||!isset($_GET['alu'])) {
	header("Location: index.php");
}
?>

<div class="row center" style="border-radius: 2%;">
	<div class="col s12 center">
		<h4>Añadir Parte o Sanción</h4>
	</div>
	<div class="col s12">
		<div class="row">
			<div class="col s6">
				<?php
				if (isset($_GET['alu'])) {
					echo "<a href=\"anadirParte.php?alu=".base64_encode($_SESSION['idAlu'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a> Nuevo Parte</div>";
				}
				else{
					echo "<a href=\"anadirParte.php?alu=".base64_encode($_SESSION['id'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a> Nuevo Parte</div>";
				}
				echo '<div class="col s6">';
				if (isset($_GET['alu'])) {
					echo "<a href=\"anadirSancion.php?alu=".base64_encode($_SESSION['idAlu'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a> Nueva Sanción</div>";
				}
				else{
					echo "<a href=\"anadirSancion.php?alu=".base64_encode($_SESSION['id'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a> Nueva Sanción</div>";
				}
				echo '<div class="col s12 center">';
				if (isset($_GET['alu'])) {
					echo '<a href="fichaAlumno.php?alu='.base64_encode($_SESSION["idAlu"]).'" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></a></div>';
				}
				else {
					echo '<a href="fichaAlumno.php?alu='.base64_encode($_SESSION["id"]).'" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></a></div>';
				}

				?>

			</div>
		</div>
	</div>

	<?php
	include 'includes/footer.php';
	?>
