<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();

if(isset($_GET['valido1'])&&isset($_GET['valido'])){
	validarCambioExperto($_GET['valido1'],$_GET['valido']);
	sleep(2);
	header("Location:editarExperto.php?id2=".$_GET['valido1']);
}
else{
	header("Location:gestion.php");
}
?>
