<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();

if(isset($_SESSION['exp'])&&($_SESSION['exp']>0)){
	editarExpertos($_SESSION['exp'],$_POST['nombre'],$_POST['usuario'],$_POST['password'],$_POST['email']);
	$_SESSION['exp']=0;
	sleep(2);
}
	header("Location:gestion.php");
?>
