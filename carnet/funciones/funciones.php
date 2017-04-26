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

function calcularColor(){
	/*switch (variable) {
		case 'value':
			# code...
			break;

		default:
			# code...
			break;
	}

	<div id="puntos" class="circle valign-wrapper green darken-4">
				<h4 class="valign">
					<?php
					echo $al[4].'/ 10';
					?></h4>
				</div>*/
}
?>
