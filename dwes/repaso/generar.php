<?php
session_start();

include 'includes/header.php';
include 'funciones/funciones.php';
require_once 'clases/perfiles.php';
require_once 'clases/usuario.php';
require_once 'clases/usuarioperfiles.php';

if(!isset($_POST['generar']))
	header("Location: index.php");
$arespuesta = $_POST['respuesta'];
if(empty($arespuesta))
	header("Location: ejercicio4.php");
else{
	$perf = perfiles::singleton();
	$perfiles = $perf->get_todos_perfiles();
	$user = usuario::singleton();
	$userperfiles = usuarioperfiles::singleton();

	$archivo = fopen( $_POST['fichero'], "r" );
	$nuevoarchivo = fopen("usuariopass.txt", "a") or die("Problemas al generar el fichero de texto.");
	mostrarNav();
	?>
	<div class="container">
		<div class="row">
		<br>
			<?php
			while( feof($archivo) == false )
			{
				echo '<div class="col s3">';
				$aDatos = fgetcsv( $archivo, 100, " ");
				echo "Apellido 1: ".$aDatos[0]."<br />";
				echo "Nombre: ".$aDatos[2]."<br />";
				echo "Usuario: ";
				echo eliminar_tildes(strtolower(substr($aDatos[2], 0, 1)).strtolower($aDatos[0]))."<br/>";

				$aleatorio = rand();
				$user->anadir_usuario(eliminar_tildes(strtolower(substr($aDatos[2], 0, 1)).strtolower($aDatos[0])),$aleatorio);
				fputs($nuevoarchivo, "Usuario: ".eliminar_tildes(strtolower(substr($aDatos[2], 0, 1)).strtolower($aDatos[0])).", Password: ".$aleatorio. PHP_EOL);
				foreach ($arespuesta as $key => $value) {
					$userperfiles->anadir_usuario_perfiles(eliminar_tildes(strtolower(substr($aDatos[2], 0, 1)).strtolower($aDatos[0])),$value);
				}
				echo "Usuario añadido.<br/>";
				echo "~~~~~~~~~~~~~~~~~~~~~~~~<br/>";
				echo'</div>';
			}
			?>
		</div>
		<?php
		fclose($nuevoarchivo);
		fclose($archivo );
		echo '<div class="col s12 center">';
		echo "<h5>Usuarios creados correctamente.</h5>";
		?>
	</div>
</div>
<?php
}
include 'includes/footer.php';

?>
