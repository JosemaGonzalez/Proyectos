<?php
session_start();
require_once 'clases/marcadores.php';
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();

if(!isset($_POST['enviar'])||$_SESSION['perfil']=="invitado"){
	header("Location: index.php");
}
elseif(!isset($_POST['recomendados'])){
	header("Location: ejercicio2.php");
}
else{
	mostrarNav();
	?>
	<div class="container">
		<div class="row">
			<div class="col s12 center">
				<?php
				$mar=marcador::singleton();

				foreach ($_POST['recomendados'] as $value) {
					$mar->anadir_marcador($_SESSION['perfil'],$value);
				}

				echo "<h4>Enlaces(s) añadido(s)</h4>";?>

				<form style="display: inline;" method="post" action="ejercicio2.php">
					<button class="btn waves-effect waves-light purple darken-2" type="submit" name="volver">Volver
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
	</div><?php
}

include 'includes/footer.php';
?>
