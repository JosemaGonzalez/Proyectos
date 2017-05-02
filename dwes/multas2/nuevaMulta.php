<?php
	session_start();

	if(!isset($_POST['enviarMulta'])){
		header("Location: index.php");
	}

	else{
		$multa=array();
		$multa['matricula']=$_POST['matricula'];
		$multa['descripcion']=$_POST['descripcion'];
		$multa['fecha']=$_POST['fecha'];
		$multa['importe']=$_POST['importe'];
		$multa['estado']="pendiente";
		array_push($_SESSION['multas'],$multa);
		header("Location: index.php");
	}
?>