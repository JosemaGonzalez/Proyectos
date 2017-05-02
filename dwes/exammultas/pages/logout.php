<?php
session_start();
$_SESSION['nombre']="";
$_SESSION['usuario']="";
$_SESSION['password']="";
$_SESSION['IdAgente']="";
$_SESSION['valido']="no";
$_SESSION['validacion']=0;
$_SESSION['perfil']="invitado";
header("Location: ../index.php");
?>
