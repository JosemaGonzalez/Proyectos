<?php
for ($f=0; $f <= 10; $f++) {
	echo "Tabla del ".$f."<br>";
for ($i=0; $i <= 10; $i++) {
	echo $f." x ".$i." = ".($f*$i)."<br>";
}
echo "<br>";
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
