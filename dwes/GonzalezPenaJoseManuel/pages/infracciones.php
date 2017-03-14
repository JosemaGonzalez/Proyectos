<?php
session_start();
include '../includes/header.php';
include 'funciones.php';

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>Buscar por matrícula: </label>
	<input type="text" name="matricula">
	<input type="submit" class="btn btn-primary" name="buscar" value="Buscar"></br></br>
</form>
<?php

if(isset($_POST['buscar']) && !empty($_POST['matricula'])){
	buscarMulta($_POST['matricula']);
}
else{
	mostrarMultas();
}
include '../includes/footer.php';
?>
