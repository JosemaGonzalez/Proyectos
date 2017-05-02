<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_POST['anadirUsuario']))
		header("Location: index.php");
	else{?>
		<div id="cajaEnLinea">
		<form method="post" action="nuevoUsuario.php">
			<label>Usuario: </label>
			<input type="text" name="usuario"></br></br>
			<label>Contraseña: </label>
			<input type="password" name="pass"></br></br>
			
			<input type="submit" class="btn btn-primary" name="enviarUsuario" value="Añadir">
		</form>
		<form method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
		</form>
		</div>
	<?php
	}

	include 'includes/footer.php';
?>