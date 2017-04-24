<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
require_once 'clases/profesores.php';
$profesores=profesores::singleton();
$profe=$profesores->get_profesor($_SESSION['id']);
?>
<div class="row center" style="border-radius: 2%;">
	<div class="col s12 center">
		<h4>Carnet de convivencia</h4>
	</div>

		<div class="col s12">
			<div class="row">
				<div class="col s3 left" id="vuelta">
					<button type="button" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></button>
				</div>
				<?php
				if ($_SESSION['perfil']=="PRO") {?>
				<div class="col s3 right" id="anadir">
					<button type="button" class="btn-floating btn-large waves-effect waves-light red darken-1"><i class="material-icons">add</i></button>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<?php
include 'includes/footer.php';
?>
