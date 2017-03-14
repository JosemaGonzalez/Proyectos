<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_GET['indice'])){
		header("Location: index.php");
	}
	else{
		$_SESSION['indice']=$_GET['indice'];

		echo "<div id=\"cajaEnLinea\">";
		echo "<form method=\"post\" action=\"modificarNotas.php\">";
		echo "<label>Nombre alumno: &nbsp; </label>";
		echo "<input type=\"text\" readonly name=\"nombre\" value=\"".$_SESSION['notas'][$_GET['indice']]['alumno']."\"></br></br>";
		echo "<label>Asignatura: &nbsp; </label>";
		echo "<input type=\"text\" readonly name=\"asignatura\" value=\"".$_SESSION['notas'][$_GET['indice']]['asignatura']."\"></br></br>";
		echo "<label>Nota 1ª EV: &nbsp; </label>";
		echo "<input type=\"number\" min=\"0\" max=\"10\" name=\"nota1\" value=\"".$_SESSION['notas'][$_SESSION['indice']]['primeraEv']."\"></br></br>";
		echo "<label>Nota 2ª EV: &nbsp; </label>";
		echo "<input type=\"number\" min=\"0\" max=\"10\" name=\"nota2\" value=\"".$_SESSION['notas'][$_SESSION['indice']]['segundaEv']."\"></br></br>";
		echo "<label>Nota 3ª EV: &nbsp; </label>";
		echo "<input type=\"number\" min=\"0\" max=\"10\" name=\"nota3\" value=\"".$_SESSION['notas'][$_SESSION['indice']]['terceraEv']."\"></br></br>";
		echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"modificar\" value=\"Modificar\">";
		echo "</form>";
	}

	if(isset($_POST['modificar'])){
		$_SESSION['notas'][$_SESSION['indice']]['primeraEv']=$_POST['nota1'];
		$_SESSION['notas'][$_SESSION['indice']]['segundaEv']=$_POST['nota2'];
		$_SESSION['notas'][$_SESSION['indice']]['terceraEv']=$_POST['nota3'];
		unset($_SESSION['indice']);
		header("Location: index.php");
	}
?>