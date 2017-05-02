<?php
session_start();

if(!isset($_POST['enviarUsuario'])||$_POST['pass']!=$_POST['pass2']){
	header("Location: regagentes.php");
}

else{
	$usuario=array();
	$usuario['usuario']=$_POST['usuario'];
	$usuario['password']=$_POST['pass'];
	$usuario['perfil']='agente';
	$usuario['valido']='no';
	$usuario['nombre']=$_POST['nombre'];
	array_push($_SESSION['usuarios'],$usuario);
	header("Location: ../index.php");
}
?>
