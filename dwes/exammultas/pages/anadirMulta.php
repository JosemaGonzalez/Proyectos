<?php
session_start();
include '../includes/header.php';
echo "<h3>Agente ".$_SESSION['nombre']."</h3><br>";
if(!isset($_POST['anadirMulta'])||$_SESSION['validacion']!=1){
	header("Location: ../index.php");
}else{?>
<form method="post" action="multar.php" style="display: inline;">
	<label>Matrícula: </label>
	<input type="text" name="matricula" placeholder="1234ABC"></br></br>
	<label>Descripción: </label>
	<input type="text" name="descripcion"></br></br>
	<label>Importe: </label>
	<input type="number" min="0" name="importe"></br></br>
	<input type="submit" class="btn btn-primary" name="enviarMulta" value="Añadir">
</form>
<?php

}
?>
<form method="post" action="./multas.php" style="display: inline;">
	<input type="submit" class="btn btn-primary" name="volver" value="Volver">
</form>
<?php
include '../includes/footer.php';
?>
