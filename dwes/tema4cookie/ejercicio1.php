<?php
setcookie("user","Josema",time()+3600);
if(isset($_COOKIE['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Josema González</title>
</head>
<body>
<h1>Ejemplo cookies</h1>
</body>
</html>
<?php
echo $_COOKIE['user'];
}else{
echo "<h1>Ejercicio 1 cookies</h1>";
setcookie("user","Josema",time()-3700);
echo $_COOKIE['user'];
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
