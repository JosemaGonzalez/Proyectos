<?php
$rol=3;
if ($rol==3) {
	echo "Administrador de la web<br>";
	echo "<a href='#'>Panel de control</a><br>";
	$rol=2;
}
if ($rol==2) {
	echo "Administrador del foro <br>";
	echo "<a href='#'>Modificar foro</a><br>";
	$rol=1;
}
if ($rol==1) {
	echo "Usuario normal <br>";
	echo "<a href='#'>Enlace normal</a><br>";
}
if ($rol>3||$rol<1) {
	echo "No tiene acceso";
}
 ?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
