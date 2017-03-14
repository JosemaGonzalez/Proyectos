<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();

if(isset($_GET['id'])){
  borrarPregunta($_GET['id']);
  sleep(2);
}
  header("Location:gestion.php");
?>
