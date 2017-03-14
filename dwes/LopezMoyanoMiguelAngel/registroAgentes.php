<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_POST['registroAgentes']))
		header("Location: index.php");
	else{?>
		<div id="cajaEnLinea">
		<form method="post" action="nuevoAgente.php">
			<label>Usuario: </label>
			<input type="text" name="usuario"></br></br>
			<label>Contraseña: </label>
			<input type="password" name="pass"></br></br>
			<label>Repita la contraseña: </label>
			<input type="password" name="pass2"></br></br>
			<label>Nombre completo: </label>
			<input type="text" name="nombre"></br></br>
			<input type="submit" class="btn btn-primary" name="enviarAgente" value="Añadir">
		</form>
		<form method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
		</form>
		</div>
	<?php
	}

	include 'includes/footer.php';
?>