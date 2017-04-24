<?php
session_start();
include 'clases/pregunta.php';
include 'clases/respuesta.php';
include 'includes/header.php';
include 'funciones/funciones.php';

comprobarVariablesSesion();
if($_SESSION['perfil']=="invitado"||!isset($_POST['enviar'])){
	header("Location:index.php");
}

else{
	mostrarNav();
	$cont=1;
	$preg=pregunta::singleton();
	$preguntas=$preg->get_preguntas();

	$respuesta = respuesta::singleton();

	foreach ($preguntas as $key => $value) {
		if(trim($_POST['respuesta'.$cont.''])==''){
			header("Location: ejercicio1.php");
		}
		$id = $respuesta->sel_respuesta_max();
		$id = $id['id']+1;

		$respuesta-> ins_respuesta($id,$value['id'],$_POST['respuesta'.$cont.'']);
		$id = $id['id']+1;

		$cont++;
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col s12 center">
				<h4>Respuestas añadidas</h4>
				<form style="display: inline;" method="post" action="ejercicio1.php">
					<button class="btn waves-effect waves-light purple darken-2" type="submit" name="volver">Volver
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
		<?php
	}
	include 'includes/footer.php';

	?>
