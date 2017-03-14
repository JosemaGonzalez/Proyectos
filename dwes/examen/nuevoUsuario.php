<?php
	session_start();

	if(!isset($_POST['enviarUsuario'])){
		header("Location: index.php");
	}

	else{
		$usuario=array();
		$usuario['usuario']=$_POST['usuario'];
		$usuario['password']=$_POST['pass'];
		$usuario['perfil']=$_POST['perfil'];
		array_push($_SESSION['usuarios'],$usuario);
		header("Location: index.php");
	}
?>