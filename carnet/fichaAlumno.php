<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
require_once 'clases/alumnos.php';
$alumno=alumnos::singleton();
$al=$alumno->get_alumno($_SESSION['id']);
?>
<div class="row center" style="border-radius: 2%;">
	<div class="col s12 center">
		<h4>Carnet de convivencia</h4>
	</div>
	<div class="col s3">
		<?php
		echo'<img src="images/'.$al[3].'" alt="" class="circle responsive-img">';
		?>
	</div>
	<div class="col s6">
		<div class="row left-align">
			<div class="col s12">
				<h5>

					<?php
					echo $al[1].' '.$al[2].', '.$al[0];
					?>
				</h5>
			</div>

			<div class="col s12">
				<h5>
					<?php
					echo $al[5];
					?>
				</h5>
			</div>
		</div>
	</div>
	<div class="col s3">
		<div class="col s12">
			<div id="puntos" class="circle valign-wrapper green darken-4">
				<h4 class="valign">
					<?php
					echo $al[4].'/ 10';
					?></h4>
				</div>
			</div>
		</div>
		<div class="col s12">
			<div class="row">
				<div class="col s3 left" id="vuelta">
					<button type="button" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">autorenew</i></button>
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
