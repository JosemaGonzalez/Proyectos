<?php
	session_start();

	if(!isset($_POST['enviarAlumno'])){
		header("Location: index.php");
	}

	else{
		$alumno=array();
		$alumno['alumno']=$_POST['nombre'];
		$alumno['asignatura']=$_POST['asignatura'];
		$alumno['primeraEv']=$_POST['nota1'];
		$alumno['segundaEv']=$_POST['nota2'];
		$alumno['terceraEv']=$_POST['nota3'];
		array_push($_SESSION['notas'],$alumno);
		header("Location: index.php");
	}
?>