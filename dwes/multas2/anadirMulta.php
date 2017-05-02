<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_POST['anadirMulta']))
		header("Location: index.php");

	else{?>
		<div id="cajaEnLinea">
		<form method="post" action="nuevaMulta.php">
			<label>Matrícula: </label>
			<input type="text" name="matricula"></br></br>
			<label>Descripcion: </label>
			<input type="text" name="descripcion"></br></br>
			<label>Fecha: </label>
			<input type="date" name="fecha"></br></br>
			<label>Importe: </label>
			<input type="number" min="0" name="importe"></br></br>
			<input type="submit" class="btn btn-primary" name="enviarMulta" value="Añadir">	
		</form>
		<form method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
		</form>
		</div>
	<?php
	}
	include 'includes/footer.php';
?>