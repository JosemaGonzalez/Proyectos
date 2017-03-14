<?php
$i=2;
$f=0;
while ($i <= 6) {
	echo "Número a sumar ".$i."<br>";
	$f=$i+$f;
	echo "Resultado acumulado ".$f."<br><br>";
	$i+=2;
}
 ?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
