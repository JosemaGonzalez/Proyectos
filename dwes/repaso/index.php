<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
if(isset($_POST['enviar']) && !empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {

	comprobarUsuario($_POST['usuario'],$_POST['contrasenia']);
}
mostrarNav();
?>
<div class="container">
	<?php
	if($_SESSION['perfil']=="invitado"){
		?>
		<div class="row">
			<div class="col s4 center-align"></div>
			<div class="col s4 center-align">
				<h3>Bienvenido</h3>
				<form action="index.php" method="post" accept-charset="utf-8">
				<div class="input-field col s12">
						<input type="text" id="usuario" name="usuario">
						<label for="usuario">Usuario</label>
					</div>
					<div class="input-field col s12">
						<input type="password" id="contrasenia" name="contrasenia">
						<label for="contrasenia">Contraseña</label>
					</div>

					<button class="btn waves-effect waves-light purple darken-2" type="submit" name="enviar">Enviar
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
		<?php
	}

	include 'includes/footer.php';
	?>
