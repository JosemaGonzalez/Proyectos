<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Josema González</title>
</head>
<body>
	<h2>Sumar dígitos</h2>
	<?php
	include("funciones.php");
	if (!isset($_POST['submit'])||empty($_POST['numero'])){
		?>
		<form method="post" accept-charset="utf-8">
			<input type="number" name="numero" value="" placeholder="Introducir número">
			<input type="submit" name="submit" value="Calcular">
		</form>
	</body>
	</html>
	<?php
}else{
	$num = $_POST["numero"];
	echo "Suma de dígitos: ";
	echo (sumar($num))."<br>";
	echo "Invertir los dígitos: ";
	echo (invertir($num));
}
?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
