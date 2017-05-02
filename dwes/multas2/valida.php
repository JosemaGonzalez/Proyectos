<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_GET['indice'])){
		header("Location: index.php");
	}
	else{
		$_SESSION['agentes'][$_GET['indice']]['validado']="true";
		$agente=array();
		$agente['usuario']=$_SESSION['agentes'][$_GET['indice']]['usuario'];
		$agente['password']=$_SESSION['agentes'][$_GET['indice']]['password'];
		$agente['perfil']="agente";
		array_push($_SESSION['usuarios'],$agente);
		header("Location: index.php");
	}
?>