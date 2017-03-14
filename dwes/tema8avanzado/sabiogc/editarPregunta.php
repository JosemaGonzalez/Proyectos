 <?php
 session_start();
 include 'includes/header.php';
 include 'funciones/funciones.php';
 include 'clases/niveles.php';

 comprobarVariablesSesion();

 if(isset($_GET['id'])){
 	$expcat = expcategorias::singleton();
 	$selcat = $expcat->get_exp_categorias($_SESSION['idExp']);
 	$niveles = niveles::singleton();
 	$nivel = $niveles->get_niveles();
 	$preguntas = pregunta::singleton();
 	$pregunta = $preguntas->get_pregunta($_GET['id']);
 	$respuestas = respuestas::singleton();
 	$respuesta = $respuestas->get_respuesta($_GET['id']);
 	?>
 	<script>
 		$(document).ready(function(){
 			$('select').material_select();
 			$('select2').material_select();
 			$('select3').material_select();
 		});
 	</script>
 	<form method="post" action="editaPreg.php" enctype='multipart/form-data'>
 		<?php
 		foreach ($pregunta as $preg) {
 			?>
 			<div class="input-field col s12 m8 l8">
 				<?php
 				echo "<input type=\"text\" name=\"pregunta\" id=\"pregunta\" value=\"".$preg['pregunta']."\">";
 				?>
 				<label for="pregunta"><i class="material-icons right">help</i></label>
 			</div>
 			<div class="input-field col s6 m4 l4">
 				<select name="categorias[]">
 					<?php
 					foreach ($selcat as $key) {
 						echo "<option value=\"".$key['categoria']."\">".$key['categoria']."</option>";
 					}
 					?>
 				</select>
 				<label>Categoría</label>
 			</div>
 			<div class="col s12 m12 l12">
 				<div class="input-field col s6 m4 l4">
 					<select name="niveles[]">
 						<?php
 						foreach ($nivel as $key) {
 							echo "<option value=\"".$key['nivel']."\">".$key['nivel']."</option>";
 						}
 						?>
 					</select>
 					<label>Nivel</label>
 				</div>
 				<div class="col s6 m4 l4 input-field">
 					<select name="tipoObjeto[]">
 						<option value="" selected class="blue darken-2">Sólo texto</option>
 						<option value="Imagen" class="blue darken-2">Imagen</option>
 						<option value="Video" class="blue-text text-darken-2">Video</option>
 						<option value="Sonido" class="blue-text text-darken-2">Sonido</option>
 					</select>
 					<label>Tipo</label>
 				</div>
 				<div class="col s12 m4 l4">
 					<div action="#">
 						<div class="file-field input-field">
 							<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
 							<input type="file" name='uploadedfile'>
 							<div class="file-path-wrapper">
 								<input class="file-path validate" placeholder="Selecciona un archivo (max 2Mb)" type="text">
 								<label style="text-align: left;">Archivos</label>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="input-field col s12 m12 l12 center" style="margin-top: -10px;">
 				<?php
 			}
 			$i=1;
 			foreach ($respuesta as $resp) {
 				?>
 				<div class="input-field col s6 m6 l6">
 					<div class="input-field col s10 m10 l10">
 						<?php
 						echo "<input type=\"text\" name=\"respuesta".$i."\" id=\"respuesta".$i."\" value=\"".$resp['respuesta']."\">";
 						echo "<label for=\"respuesta".$i."\"><i class=\"material-icons right\">live_help</i></label>";
 						?>
 					</div>
 					<div class="input-field col s1 m1 l1">
 						<?php
 						if($resp['valida']==1){
 							echo "<input type=\"checkbox\" name=\"check".$i."\" id=\"check".$i."\" checked>";
 						}
 						if($resp['valida']==0){
 							echo "<input type=\"checkbox\" name=\"check".$i."\" id=\"check".$i."\">";
 						}
 						echo "<label id='label' for=\"check".$i."\">Válida</label>";
 						?>
 					</div>
 				</div>
 				<?php
 			}
 			?>
 		</div>

 		<br>
 	</div>
 	<div class="col s6 m6 l6 left">
 		<a class="btn light-blue darken-2" href="gestion.php">Volver<i class="material-icons left">arrow_back</i>
 		</a>
 	</div>
 	<div class="col s6 m6 l6 right">
 		<button class="btn light-blue darken-4 right" type="submit" name="editPreg" onclick="Materialize.toast('Editado', 1000)">Editar<i class="material-icons right">send</i>
 		</button>
 	</div>
 </form>

 <?php

}else{
	header("Location: gestion.php");
}
include 'includes/footer.php';
?>
