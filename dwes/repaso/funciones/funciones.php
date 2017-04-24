<?php
require_once 'clases/usuario.php';
require_once 'clases/usuarioperfiles.php';
function comprobarVariablesSesion(){
	if(!isset($_SESSION['perfil'])){
		$_SESSION['perfil']="invitado";
		$_SESSION['perfiles']=[];
	}

}
function mostrarNav(){
	if($_SESSION['perfil']=="invitado"){
		?>
		<nav class="purple darken-1" role="navigation">
			<div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo">PHP</a>
			</div>
		</nav>
		<?php
	}
	if($_SESSION['perfil']!="invitado"){
		?>
		<nav class="purple darken-1" role="navigation">
			<div class="nav-wrapper container purple darken-1">
				<a id="logo-container" href="" class="brand-logo">PHP</a>
				<ul class="right hide-on-med-and-down">
					<?php
					foreach ($_SESSION['perfiles'] as $key=>$value) {
						if($value=="EJ1"){
							?>
							<li>
								<a class="white-text" href="ejercicio1.php">Ejercicio 1</a>
							</li>
							<?php
						}
						if($value=="EJ2"){
							?>
							<li>
								<a class="white-text" href="ejercicio2.php">Ejercicio 2</a>
							</li>
							<?php
						}
						if($value=="EJ3"){
							?>
							<li>
								<a class="white-text" href="ejercicio4.php">Ejercicio 4</a>
							</li>
							<?php
						}
					}
					?>
				</ul>
			</div>
		</nav>
		<?php
	}
}
function comprobarUsuario($usuario,$pass){
	$usu = Usuario::singleton();
	$usua=$usu->get_usuarios($usuario,$pass);

	if(!empty($usua)){
		$usuperf = UsuarioPerfiles::singleton();
		$usuarioperfiles=$usuperf->get_usuario_perfiles($usuario);

		$_SESSION['perfil']=$usua['perfil'];

		foreach ($usuarioperfiles as $key) {
			if(!in_array($key['perfil'],$_SESSION['perfiles']))
				array_push($_SESSION['perfiles'],$key['perfil']);
		}
	}
}
function eliminar_tildes($cadena){

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
	$texto = str_replace($no_permitidas, $permitidas ,$cadena);
	return $texto;
}
function mostrarForm(){
	$cont=1;
	$pregunta = Pregunta::singleton();
	$preguntas = $pregunta->get_preguntas();
	$opc= opciones::singleton();

	?>
	<div class="row"><form style="display: inline" method="post">
		<?php
		echo "<div class=\"col s12 center\"><h4>Preguntas</h4></div>";
		foreach ($preguntas as $preg) {
			switch($preg['tipo']){
				case 'TEXT':
				echo "<div class=\"input-field col s12 m6\">";
				echo"<input type=\"text\" id=\"respuesta\".$cont\" name=\"respuesta".$cont."\">";
				echo "<label for=\"respuesta\".$cont\">".$preg['pregunta']."</label>";
				echo"</div><br>";

				break;
			//arreglar al coger el radio mal
				case 'CHECK':
				$opciones = $opc->get_opciones_id($preg['id']);
				echo "<div class=\"col s12 m6\">";
				echo "<div>".$preg['pregunta']."</div>";
				foreach ($opciones as $key => $value) {
					echo "<div>";
					echo"<input type=\"radio\" id=\"".$value['opcion']." \" value=\"".$value['opcion']."\" name=\"respuesta".$cont."\"/>";
					echo "<label for=\"". $value['opcion']." \">".$value['opcion']." </label>";
					echo "</div>";
				}
				echo"</div><br>";

				break;
				case 'LIST':
				$opciones = $opc->get_opciones_id($preg['id']);
				echo "<div class=\"input-field col s12 m6\">";
				echo "<select name=\"respuesta".$cont."\">";
				foreach ($opciones as $key => $value) {
					echo "<option value=\"".$value['opcion']." \">".$value['opcion']."</option>";
				}

				echo "</select>";
				echo "<label>".$preg['pregunta']."</label>";
				echo"</div>";

				break;

			}
			$cont++;
		}
		echo "<br><br>";

		echo "<div class=\"col s12 center\"><br>";
		echo '<button class="btn waves-effect waves-light purple darken-2" type="submit" name="enviar">Enviar';
		echo'<i class="material-icons right">send</i>';
		echo'</button>';
		echo "</div></form>";
		echo "</div>";
	}
	?>
