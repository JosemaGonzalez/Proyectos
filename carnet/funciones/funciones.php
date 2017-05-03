<?php
require_once "clases/usuario.php";

function comprobarVariablesSesion(){
	if(!isset($_SESSION['perfil'])){
		$_SESSION['perfil']="invitado";
		header("Location: index.php");
	}
}

function comprobarUsuario($usuario,$password){
	$usuarios = usuario::singleton();
	$usuario = $usuarios->get_usuarios($usuario,$password);
	$_SESSION['perfil']=$usuario[3];
	$_SESSION['id']=$usuario[0];
	if($_SESSION['perfil']=="invitado"){
		header("Location: index.php");
	}
	if($_SESSION['perfil']=="ALU"){
		header("Location: fichaAlumno.php");
	}
	if($_SESSION['perfil']=="PRO"){
		header("Location: fichaProfesor.php");
	}
	if($_SESSION['perfil']=="TUT"){
		header("Location: fichaTutorAlumno.php");
	}
}
function cargarBotonParte(){
	if ($_SESSION['perfil']=="PRO") {?>
	<div class="col s3 right" id="anadir">
		<?php
		if (isset($_GET['alu'])) {
			echo "<a href=\"anadirParte.php?alu=".base64_encode($_SESSION['idAlu'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a></div>";
		}
		else{
			echo "<a href=\"anadirParte.php?alu=".base64_encode($_SESSION['id'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a></div>";

		}
	}
}
function cargarBotonAtras(){
	if ($_SESSION['perfil']=="PRO") {?>
	<div class="col s3 left">
		<?php
		echo '<a href="fichaProfesorAlumno.php?grupo='.base64_encode($_SESSION["grupo"]).'" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></a></div>';
	}
	if ($_SESSION['perfil']=="TUT") {?>
	<div class="col s3 left">
		<br>
		<form action="fichaTutorAlumno.php" method="post" accept-charset="utf-8">
			<button type="submit" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></button>
		</form>
	</div>
	<?php
	}
}
function calcularColor($num){
	switch ($num) {
		case 7:
		echo '<div id="puntos" class="circle valign-wrapper yellow">';
		break;
		case 8:
		echo '<div id="puntos" class="circle valign-wrapper amber">';
		break;
		case 9:
		echo '<div id="puntos" class="circle valign-wrapper orange">';
		break;
		case 10:
		echo '<div id="puntos" class="circle valign-wrapper red">';
		break;
		default:
		echo '<div id="puntos" class="circle valign-wrapper green">';
		break;
	}
	echo'<h4 class="valign">';
	echo $num.'/ 10';
	echo'</div>';
}
?>
