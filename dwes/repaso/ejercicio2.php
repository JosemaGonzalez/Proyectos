<?php
session_start();
require_once 'clases/marcadores.php';

include 'includes/header.php';
include 'funciones/funciones.php';
$valido = false;
for ($i=0; $i < count($_SESSION['perfiles']) ; $i++) {
  if($_SESSION['perfiles'][$i] == "EJ2"){
    $valido = true;
  }
}
if(!$valido){
  header("Location:index.php");
}
mostrarNav();
?>
<div class="container">
	<div class="row">
		<div class="col s12 center">
			<?php
			$mar=marcador::singleton();
			$marcadores=$mar->getMarcadoresUsuario($_SESSION['perfil']);
			echo "<h4>Mis enlaces</h4>";

			foreach ($marcadores as $key) {
				echo $key['marcador']."<br></br>";
			}

			echo "<h5>Enlaces recomendados</h5>";
			$marcadores=$mar->getMarcadoresRecomendados($_SESSION['perfil']);
			if(!empty($marcadores)){
				echo "<br></br></div>";
				echo "<div class=\"col m5\"></div>";
				echo "<div class=\"col s12 m6\">";
				echo "<form method=\"post\" action=\"recomendados.php\">";

				foreach ($marcadores as $key) {
					echo "<div><input type=\"checkbox\" name=\"recomendados[]\" id=\"".$key['marcador']."\" value=\"".$key['marcador']."\"/>";
					echo "<label for=\"".$key['marcador']."\">".$key['marcador']."</label></div>";
					echo "<br>";
				}
				echo '<button class="btn waves-effect waves-light purple darken-2" type="submit" name="enviar">Enviar';
				echo'<i class="material-icons right">send</i>';
				echo'</button>';
				?>
			</form>
		</div>
		<?php
	}else{
		echo "No hay enlaces recomendados para tí<br>";

	}  ?>
</div>
</div>
</div>

<?php
include 'includes/footer.php';

?>
