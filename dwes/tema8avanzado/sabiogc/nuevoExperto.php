<?php
session_start();
require_once 'clases/experto.php';
include 'includes/header.php';

if(!isset($_POST['enviar'])){
	header("Location: login.php");
}
else{
	if(empty($_POST['nombre'])||empty($_POST['usuario'])||empty($_POST['pass'])||empty($_POST['email'])){
	header("Location: registro.php");
	}else{
		$experto = experto::singleton();
		$experto->anadir_experto($_POST['nombre'],$_POST['usuario'],$_POST['pass'],$_POST['email']);
		$id = $experto->get_ultimo_experto()['id'];
		echo "<h3 class=\"center blue-text text-darken-2\">Experto añadido</h3><h4 class=\"center blue-text text-darken-2\">Sus categorias:</h4>";

		foreach($_POST['categorias'] as $selected) {
			echo "<h5 class=\"center blue-text text-darken-2\">".$selected."</h5>";
			$experto->anadir_experto_categoria($id,$selected);
		}
		?>
		<form method="post" action="login.php">
			<button class="btn light-blue darken-2 center" type="submit" name="enviar">Volver<i class="material-icons right">send</i>
			</button>
		</form>
		<?php
	}
}

include 'includes/footer.php';
?>
