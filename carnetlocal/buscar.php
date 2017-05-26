<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
require_once 'clases/alumnos.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']!="PRO") {
	header("Location: index.php");
}
$alumno = alumnos::singleton();
if(isset($_POST['buscarAlumno'])){
	$alu = $alumno->get_alumno_DNI($_POST['alumnoABuscar']);
	$_SESSION["grupo"] = $alu[1];
	header("Location: fichaAlumno.php?alu=".base64_encode($alu[0]));
}
?>
