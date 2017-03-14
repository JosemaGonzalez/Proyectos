<?php
session_start();
include 'funciones.php';
comprobarVariable();

if(isset($_POST['submit'])){
	$usuario = $_POST['usuario'];
	$pass = $_POST['password'];
	foreach ($_SESSION['usuarios'] as $key => $value) {
		if($_SESSION['usuarios'][$key]['user']==$usuario&&$_SESSION['usuarios'][$key]['pass']==$pass){
			$_SESSION['perfil']=$usuario;
		}
	}
}

echo "Estás logueado como ".$_SESSION['perfil'];
if($_SESSION['perfil']=='invitado'||!isset($_POST['submit'])){
	?>
	<form action="index.php" method="post" accept-charset="utf-8">
		<input type="text" name="usuario" value="" placeholder="Usuario">
		<input type="password" name="password" value="" placeholder="Contraseña">
		<input type="submit" name="submit" value="Entrar">
	</form>
	<?php
}
if($_SESSION['perfil']=='admin'){
	echo "<br>";
	echo "Hola admin";
}
if($_SESSION['perfil']=='profe'){
	echo "<br>";

	echo "Hola profesor";

}
if($_SESSION['perfil']=='alum'){
	echo "<br>";

	echo "Hola alumno";

}
if($_SESSION['perfil']!='invitado'){
	?>
	<form method="post" action="logout.php">
		<input type="submit" name="logout" value="Logout">
	</form>
	<?php
}
?>
<form method="post" action="cerrarsesion.php">
	<input type="submit" name="cerrar" value="Cerrar sesión">
</form>
<br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
