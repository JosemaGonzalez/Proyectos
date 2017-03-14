<?php
session_start();
include '../includes/header.php';
if($_SESSION['validacion']==1){
echo "Mi usuario es ".$_SESSION['usuario'];
echo "<br>Mi contraseña es ".$_SESSION['password'];
echo "<br>Mi nombre es ".$_SESSION['nombre'];
echo "<br>Soy ".$_SESSION['perfil'];
}
else{
	header("Location: ../index.php");
}
include '../includes/footer.php';
?>
