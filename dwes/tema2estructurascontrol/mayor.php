<?php
$a = 5;
$b = 6;
echo "el número a es: ".$a. " el número b es: ".$b;
echo "<br>";
if ($a>$b) {
	echo $a. " es mayor que ". $b;
}
if ($b>$a) {
	echo $b. " es mayor que ". $a;
}
if ($a==$b) {
	echo "Son iguales";
}
  ?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
