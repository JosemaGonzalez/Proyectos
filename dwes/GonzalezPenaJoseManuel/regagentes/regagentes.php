<?php
session_start();
include '../includes/header.php';
include '../pages/funciones.php';
?>
<div id="cajaEnLinea">
	<form method="post" action="nuevoagente.php" style="display: inline;">
		<label>Usuario: </label>
		<input type="text" name="usuario"></br></br>
		<label>Contraseña: </label>
		<input type="password" name="pass"></br></br>
		<label>Repita contraseña: </label>
		<input type="password" name="pass2"></br></br>
		<label>Nombre: </label>
		<input type="text" name="nombre"></br></br>
		<input type="submit" class="btn btn-primary" name="enviarUsuario" value="Añadir" >
	</form>
	<br>
	<br>
</div>
<?php
include '../includes/footer.php';
?>
