<?php
session_start();
include '../includes/header.php';
include 'funciones.php';
if($_SESSION['validacion']==2){
validarAgente();
}
else{
	header("Location: ../index.php");
}
include '../includes/footer.php';
?>
