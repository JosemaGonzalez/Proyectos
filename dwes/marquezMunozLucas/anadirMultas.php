<?php
	session_start();


	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_POST['anadirMultas']))
		header("Location: index.php");

	else{?>
		<div id="cajaEnLinea">
		<form method="post" action="nuevaMulta.php">
			<label>Matrícula: </label>
			<input type="textarea" name="matricula"></br></br>
			<label>Descripción: </label>
			<input type="textarea" name="descripcion"></br></br>
			<label>Importe: </label>
			<input type="number" min="0" name="importe"></br></br>
			<label>Fecha: </label>
			<?php $hoy = getdate(); echo $hoy['wday'].'/'.$hoy['mon'].'/'.$hoy['year'];  ?>
			<br/><br/>
			
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