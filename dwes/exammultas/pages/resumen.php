<?php
session_start();
include '../includes/header.php';
include 'funciones.php';
if($_SESSION['validacion']==2){
?>
<form method="post" action="informe.php">
	<label>Año: </label>
	<input type="number" name="ano"></br></br>
	<input type="submit" class="btn btn-primary" name="buscar" value="Buscar">
</form>
<?php
}
else{
	header("Location: ../index.php");
}
include '../includes/footer.php';
?>
