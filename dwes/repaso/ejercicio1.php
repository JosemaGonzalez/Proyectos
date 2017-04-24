<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
include 'clases/pregunta.php';
include 'clases/opciones.php';
include 'clases/respuesta.php';
$valido = false;
for ($i=0; $i < count($_SESSION['perfiles']) ; $i++) {
  if($_SESSION['perfiles'][$i] == "EJ1"){
    $valido = true;
  }
}
if(!$valido){
  header("Location:index.php");
}
mostrarNav();
?>
<script>
	$(document).ready(function() {
		$('select').material_select();
	});
</script>
<div class="container">

	<?php
	if(!isset($_POST['enviar'])){
		mostrarForm();
	}else{
		$cont=1;
		$preg=pregunta::singleton();
		$preguntas=$preg->get_preguntas();
		$respuesta = respuesta::singleton();
		$error = 0;
		for ($i=1; $i < 4; $i++) {
			if(!isset($_POST['respuesta'.$i.''])){
				header("Location: ejercicio1.php");
				$error= 1;
			}
		}
		if($error==0){
			foreach ($preguntas as $key => $value) {
				$id = $respuesta->sel_respuesta_max();
				$id = $id['id']+1;

				$respuesta-> ins_respuesta($id,$value['id'],$_POST['respuesta'.$cont.'']);
				$id = $id['id']+1;

				$cont++;
			}
		}
		mostrarForm();
		echo "<div class=\"row\">";
		echo "<div class=\"col s12 center\"><h4>Preguntas Respondidas</h4></div>";
		echo "<div class=\"col m4\"></div>";
		echo "<div class=\"col s12 m6\">";
		$preg= pregunta::singleton();
		$res=respuesta::singleton();
		$respuesta=$res->get_respuestas();

		foreach ($respuesta as $key1 => $value) {
			$pregunta=$preg->get_pregunta($value['idpregunta']);
			echo $pregunta['pregunta']." ";
			echo " ".$value['respuesta'];
			echo "<br></br>";
		}
		echo "</div>";
	}
	echo"</div>";

	include 'includes/footer.php';

	?>
