<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';


	if(!isset($_GET['indice'])){
		header("Location: index.php");	
	}

	if($_SESSION['multa'][$_GET['indice']]){
	
	$_SESSION['multa'][$_GET['indice']]['estado']="pagada";
	header("Location: index.php");
	}
	
?>