<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Josema González</title>
</head>
<body>
	<h2>Calcula iniciales</h2>
	<?php
	include("funciones.php");
	if (!isset($_POST['submit'])||empty($_POST['nombre'])||empty($_POST['apellido'])){
		?>
		<form method="post" accept-charset="utf-8">
			<input type="text" name="nombre" value="" placeholder="Introducir nombre">
			<input type="text" name="apellido" value="" placeholder="Introducir apellido">
			<input type="submit" name="submit" value="Calcular">
		</form>
	</body>
	</html>
	<?php
}else{
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	echo (iniciales($nombre,$apellido));
}
?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
