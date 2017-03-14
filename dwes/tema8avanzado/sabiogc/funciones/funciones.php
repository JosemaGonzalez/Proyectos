<?php
require_once 'clases/administrador.php';
require_once 'clases/experto.php';
require_once 'clases/categoria.php';
require_once 'clases/pregunta.php';
require_once 'clases/respuestas.php';
require_once 'clases/expcategorias.php';

function comprobarVariablesSesion(){
	if(!isset($_SESSION['perfil'])){
		$_SESSION['perfil']="invitado";
		header("Location: index.php");
	}
}
function comprobarAdministrador($usuario,$password){
	$administrador = administrador::singleton();
	$admin = $administrador->get_administradores($usuario,$password);
	if(empty($admin)){
		$_SESSION['perfil']="invitado";
		comprobarExperto($usuario,$password);
	}
	else{
		$_SESSION['perfil']="admin";

	}
}
function comprobarExperto($usuario,$password){
	$experto = experto::singleton();
	$exp = $experto->get_expertos($usuario,$password);
	if(empty($exp)){
		$_SESSION['perfil']="invitado";
	}
	else{
		$_SESSION['perfil']="experto";
		$_SESSION['idExp']=$exp['id'];

	}
}
function insertarCategoria($categoria){
	$categorias = categoria::singleton();
	$cat = $categorias->ins_categorias($categoria);
}
function insertarPregunta($id,$cadena,$objeto,$tipoObjeto,$categorias,$niveles,$idExp){
	$pregunta2 = pregunta::singleton();
	$preg2 = $pregunta2->ins_pregunta($id,$cadena,$objeto,$tipoObjeto,$categorias,$niveles,$idExp);
}
function insertarRespuesta($id,$respuesta,$valida)
{
	$respuestas = respuestas::singleton();
	$respuestas->ins_respuesta($id,$respuesta,$valida);
}
function validarExperto($id){
	$experto = experto::singleton();
	$exp = $experto->validar_exp($id);
}
function validarCambioExperto($id,$valido){
	$experto = experto::singleton();
	$exp = $experto->validar_cam_exp($id,$valido);
}
function editarExpertos($id,$nombre,$usuario,$password,$email){
	$experto = experto::singleton();
	$exp = $experto->edita_exp($id,$nombre,$usuario,$password,$email);
}
function borrarExperto($id){
	$expcategorias = expcategorias::singleton();
	$expcategorias->borrar_exp_categoria($id);
	$experto = experto::singleton();
	$experto->borrar_exp($id);
}
function borrarPregunta($id){
	$respuestas = respuestas::singleton();
	$respuestas->borrar_respuesta($id);
	$preguntas = pregunta::singleton();
	$preguntas->borrar_pregunta($id);
}
?>
