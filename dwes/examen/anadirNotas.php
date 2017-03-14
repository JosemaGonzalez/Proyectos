<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_POST['anadirNotas']))
		header("Location: index.php");

	else{?>
		<div id="cajaEnLinea">
		<form method="post" action="nuevoAlumno.php">
			<label>Nombre alumno: </label>
			<input type="text" name="nombre"></br></br>
			<label>Asignatura: </label>
			<input type="text" name="asignatura"></br></br>
			<label>Nota 1ª EV: </label>
			<input type="number" min="0" max="10" name="nota1"></br></br>
			<label>Nota 2ª EV: </label>
			<input type="number" min="0" max="10" name="nota2"></br></br>
			<label>Nota 3ª EV: </label>
			<input type="number" min="0" max="10" name="nota3"></br></br>
			<input type="submit" class="btn btn-primary" name="enviarAlumno" value="Añadir">
		</form>
		<form method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
		</form>
		</div>
	<?php
	}

	include 'includes/footer.php';
?>