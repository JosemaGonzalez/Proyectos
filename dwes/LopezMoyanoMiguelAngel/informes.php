<?php
	session_start();
	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';

    if(!isset($_POST['informes']))
		header("Location: index.php");

	else{
		mostrarMultas();?>
		<form method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
		</form><?php
	}

    include 'includes/footer.php';
?>