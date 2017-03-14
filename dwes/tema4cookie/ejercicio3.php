<?php
if(!isset($_COOKIE['usuario'])){

	$valUsu = "";
	$valPass= "";
}
else{
	$valUsu =$_COOKIE['usuario'];
	$valPass = $_COOKIE['pass'];

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Josema González</title>
	</head>
	<body>
	<h1>Ejercicio cookies 3</h1>
	<form method="post" accept-charset="utf-8">
		Usuario: <input type="text" name="usuario" value=<?php echo $_COOKIE['usuario'] ?> placeholder="">
		Contraseña: <input type="text" name="pass" value=<?php echo $_COOKIE['pass'] ?> placeholder="">
	<input type="submit" name="guardar" value="Guardar">
	<input type="submit" name="borrar" value="Borrar">
	</form>
	</body>
	</html>
	<?php
	if(isset($_POST['borrar'])){
	setcookie("usuario",$_POST['usuario'],time()-3700);
	setcookie("pass",$_POST['pass'],time()-3700);
	echo "No hay cookies";
	}
	if(isset($_POST['guardar'])){
	setcookie("usuario",$_POST['usuario'],time()+3600);
	setcookie("pass",$_POST['pass'],time()+3600);
	echo "cookie guardada";
	}
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
