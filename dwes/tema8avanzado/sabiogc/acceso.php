<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();
  if(!isset($_POST['acceso'])||empty($_POST['usuario'])||empty($_POST['password'])){
    header("Location:login.php");
  }
  else{
  comprobarAdministrador($_POST['usuario'],$_POST['password']);
    header("Location:gestion.php");
  }
