<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();

if(isset($_GET['id1'])){
  borrarExperto($_GET['id1']);
  sleep(2);
}
  header("Location:gestion.php");
?>
