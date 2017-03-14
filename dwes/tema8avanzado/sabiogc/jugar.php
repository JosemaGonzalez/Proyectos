<?php
session_start();
require_once 'clases/pregunta.php';
require_once 'clases/respuestas.php';

include 'includes/header.php';
if(!isset($_SESSION['resp'])){
	$_SESSION['resp']=-1;
	header("Location:jugar.php");
}
else{
	?>
	<?php
	$pregunta = pregunta::singleton();
	$datoPregunta = $pregunta->get_pregunta_aleatoria();

	$respuestas = respuestas::singleton();
	$datoRespuestas = $respuestas->get_respuestas($datoPregunta['id']);
	switch($datoPregunta['tipoObjeto']){
		case 'Imagen':
		echo '<div class="col m1 left"></div>';
		echo '<div class="col s12 m10 l2 right">';
		echo '<img style="margin-top: 20px;height: cover; width: 300px" class="circle" src="multimedia/'.$datoPregunta['Objeto'].'">';
		echo '</div>';
		break;
		case 'Vídeo':
		echo '<div class="col m1 left"></div>';
		echo '<div class="col s12 m10 l2 right">';
		echo '<video style="margin-top: 20px;" width="300" height="cover" controls><source src="multimedia/'.$datoPregunta['Objeto'].'"></video>';
		echo '</div>';
		break;
		case 'Audio':
		echo '<div class="col m2 left"></div>';

		echo '<div class="col s12 m10 l2 right">';
		echo '<audio style="margin-top: 100px;" controls><source src="multimedia/'.$datoPregunta['Objeto'].'"></audio>';
		echo '</div>';
		break;
	}
	echo '<div class="col s12 m12 l10 left">';
	echo "<h5>".$datoPregunta['pregunta']."</h5><br><br>";

	foreach ($datoRespuestas as $key => $value) {
		echo '<div class="col s12 m6 l6 left">';
		echo "<a href=\"mostrarResultado.php?valor=".$value."&id=".$datoPregunta['id']."\" class=\"waves-effect waves-light btn light-blue darken-3\">".$value."<br/>"."</a>";
		echo "<br/><br/></div>";
	}
	echo "</div>";
	echo '<div class="col s1 m1 left"></div>';
	echo '<div class="col s10 m10 l12 center respuesta">';
	if($_SESSION['resp']==1){
		echo "<div style=\"cursor:default;\" class=\"center waves-effect waves-light btn green darken-1\">Respuesta Verdadera<i class='material-icons right'>done</i></div>";
	}
	if($_SESSION['resp']==0){
		echo "<div style=\"cursor:default;\" class=\"center waves-effect waves-light btn red darken-1\">Respuesta Falsa<i class='material-icons right'>close</i></div>";
	}
	echo "</div>";
}

include 'includes/footer.php';
?>
