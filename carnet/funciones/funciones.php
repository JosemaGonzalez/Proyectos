<?php
require_once "clases/usuario.php";
require_once "clases/partes.php";
require_once "clases/conducta.php";
require_once "clases/rPartesConductas.php";

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
			echo "<a href=\"sancionParte.php?alu=".base64_encode($_SESSION['idAlu'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a></div>";
		}
		else{
			echo "<a href=\"sancionParte.php?alu=".base64_encode($_SESSION['id'])."\" class=\"btn-floating btn-large waves-effect waves-light indigo darken-1\"><i class=\"material-icons\">add</i></a></div>";

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

function getConductas(){
	$con = conducta::singleton();
	$conductas = $con->getConductas();
	echo '<div class="col s12 left"><label>Conductas</label></div>';
	echo '<div class="col s12 left-align">';
	foreach ($conductas as $key => $value) {
		echo '<input type="checkbox" name="conductasAdjuntas[]" class="filled-in" id="'.$value[0].'" value="'.$value[0].'"/><label class="black-text"  for="'.$value[0].'">'.'('.$value[2]. ') '.$value[1].' ('.$value[3].')'.'</label>';
	}
	echo "</div>";
}
function ponerNuevoRPartesConductas($idParte,$idConducta){
	$rpar = rPartesConductas::singleton();
	$rpartesC = $rpar->insertar_rPartesConductas($idParte,$idConducta);
}
function cargarPartes($id){
	$partes = partes::singleton();
	$parte = $partes->get_partesAlumnoSancion($id);
	echo '<div class="col s12"><div class="col s12 left"><label>Partes Asociados </label></div>';
	foreach ($parte as $key => $value) {
		echo '<div class="col s6 left">';
		echo '<input type="checkbox" name="partes[]" class="filled-in" id="'.$value[6].'" value="'.$value[6].'"/><label  for="'.$value[6].'">'.$value[1]." ".$value[2].'</label>';
		echo "<br/></div>";
	}
	echo "</div>";
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
