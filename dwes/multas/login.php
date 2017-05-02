<?php
	session_start();
	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';
    

	comprobarVariablesSesion();
	?>

	<form method="post" action="index.php"> 
        <label>Usuario </label> <input type="text" name="usuario"></br></br>
        <label>Contraseña </label> <input type="password" name="contrasenia"><br/><br/>
        <input type="submit" class="btn btn-primary" name="enviar" value="enviar">
        </form>