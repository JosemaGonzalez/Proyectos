<?php
session_start();
include 'includes/header.php';
include 'nav.php';

if(isset($_POST['enviar']) && !empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
	foreach ($_SESSION['usuarios'] as $key => $value) {
		if($_SESSION['usuarios'][$key]['usuario']==$_POST['usuario'] &&
			$_SESSION['usuarios'][$key]['password']==$_POST['contrasenia']){
			$_SESSION['perfil']=$_SESSION['usuarios'][$key]['perfil'];
		$_SESSION['nombre']=$_SESSION['usuarios'][$key]['nombre'];
		$_SESSION['usuario']=$_SESSION['usuarios'][$key]['usuario'];
		$_SESSION['password']=$_SESSION['usuarios'][$key]['password'];
		$_SESSION['IdAgente']=$key;
		$_SESSION['valido']=$_SESSION['usuarios'][$key]['valido'];

	}
}
header("Location: ./index.php");
}
if($_SESSION['perfil']=="invitado"){?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>Usuario </label> <input type="text" name="usuario"></br></br>
	<label>Contraseña </label> <input type="password" name="contrasenia"><br/><br/>
	<input type="submit" class="btn btn-primary" name="enviar" value="enviar">
</form><?php
}
if($_SESSION['perfil']=="ciudadano"){
	echo "<p>Bienvenido ciudadano</p></br></br>";
	echo "<div id=\"cajaEnLinea\">";
	$_SESSION['validacion']=0;
}

if($_SESSION['perfil']=="agente" && $_SESSION['valido']=="si"){
	echo "<p>Bienvenido ".$_SESSION['nombre']."</p></br></br>";
	echo "<div id=\"cajaEnLinea\">";
$_SESSION['validacion']=1;
}
if($_SESSION['perfil']=="agente" && $_SESSION['valido']=="no"){
	echo "<p>Aún no estás validado</p></br></br>";
$_SESSION['validacion']=0;
}

if($_SESSION['perfil']=="admin"){
	echo "<p>Bienvenido administrador</p></br></br>";
	echo "<div id=\"cajaEnLinea\">";
	$_SESSION['validacion']=2;
}

if($_SESSION['perfil']!="invitado"){
	mostrarBotonesSalida();
	echo "</div>";
	$_SESSION['validacion']=0;
}
include 'includes/footer.php';
?>
