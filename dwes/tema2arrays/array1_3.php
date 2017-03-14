<?php
$i = rand(0,10);
$j = rand(0,10);
$k=($i+$j)/2;
$notas=array(
	"Josema"=>array($i,$j,$k),
	"Pedro"=>array($i,$j,$k),
	"Pablo"=>array($i,$j,$k));

foreach ($notas as $i1 => $u1) {
	echo $i1;
	echo"<br>1ª&nbsp;&nbsp; 2ª&nbsp;&nbsp; Final<br>";
	foreach ($u1 as $i2 => $u2) {
echo $u2."&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo"<br>";
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
