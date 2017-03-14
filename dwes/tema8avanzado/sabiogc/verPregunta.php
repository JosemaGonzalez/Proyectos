 <?php
 session_start();
 include 'includes/header.php';
 include 'funciones/funciones.php';
 comprobarVariablesSesion();

 if(isset($_GET['id'])){
 	$preguntas = pregunta::singleton();
 	$pregunta = $preguntas->get_pregunta($_GET['id']);
 	$respuestas = respuestas::singleton();
 	$respuesta = $respuestas->get_respuesta($_GET['id']);
 	?>
 	<table class="highlight responsive-table">
 		<thead>
 			<tr>
 				<th data-field="Pregunta">Pregunta</th>
 				<th data-field="Objeto">Objeto</th>
 				<th data-field="TipoObjeto">TipoObjeto</th>
 				<th data-field="Categoria">Categoría</th>
 				<th data-field="Nivel">Nivel</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 			foreach ($pregunta as $key) {
 				echo "<tr>";
 				echo "<td>".$key['pregunta']."</td>";
 				echo "<td>".$key['Objeto']."</td>";
 				echo "<td>".$key['tipoObjeto']."</td>";
 				echo "<td>".$key['categoria']."</td>";
 				echo "<td>".$key['nivel']."</td>";
 				echo "</tr>";
 			}
 			?>
 		</tbody></table>
 		<table class="highlight responsive-table">
 			<thead>
 				<tr>
 					<th data-field="Respuesta">Respuesta</th>
 					<th data-field="Valida">Valida</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php
 				foreach ($respuesta as $key) {
 					echo "<tr>";
 					echo "<td>".$key['respuesta']."</td>";
 					if($key['valida']==1){
 						echo "<td>Sí</td>";
 					}
 					else{
 						echo "<td>No</td>";
 					}
 					echo "</tr>";
 				}
 				?>
 			</tbody></table>
 			<div class="col s4 m4 l4"></div>
 			<div class="col s4 m4 l4 center">
 				<a class="btn light-blue darken-2" href="gestion.php">Volver<i class="material-icons left">arrow_back</i>
 				</a>
 			</div>
 			<?php

 		}else{
 			header("Location: gestion.php");
 		}
 		include 'includes/footer.php';
 		?>
