<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();
if($_SESSION['perfil']=="admin"||!empty($_POST['categoria'])){
	insertarCategoria($_POST['categoria']);
	sleep(2);
}
	header("Location:gestion.php");
?>
