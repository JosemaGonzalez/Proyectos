<?php
session_start();
echo "<h1>Autenticación básica</h1>";
if(!isset($_SESSION['com'])){
	$_SESSION['com']=false;
}
if($_SESSION['com']==false){
	?>
	<form action="" method="post" accept-charset="utf-8">
		<input type="text" name="usuario" value="" placeholder="usuario">
		<input type="password" name="pass" value="" placeholder="contraseña">
		<input type="submit" name="submit" value="Acceder">
	</form>
	<?php
	$_SESSION['com']=true;

}else{
	if($_POST['usuario']=="usuario" && $_POST['pass']=="usuario" && isset($_POST['submit'])){
		$_SESSION['com']=true;
		echo "Bienvenido ".$_POST['usuario'];
		echo " <form method=\"post\" action=\"cerrarsesion.php\">
		<input type=\"submit\" name=\"cerrar\" value=\"Cerrar sesión\">
	</form>";
}
else{
	echo "Login incorrecto";
	$_SESSION['com']=false;
	echo " <form method=\"post\" action=\"cerrarsesion.php\">
	<input type=\"submit\" name=\"cerrar\" value=\"Volver\">
</form>";
}
}
?>
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
