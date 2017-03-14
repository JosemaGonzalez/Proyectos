<?php
$frutas = array(
 "manzana" => array(
 "color" => "rojo",
 "sabor" => "dulce",
 "forma" => "redondeada"
 ),
 "naranja" => array(
 "color" => "naranja",
 "sabor" => "ácido",
 "forma" => "redondeada"
 ),
 "plátano" => array(
 "color" => "amarillo",
 "sabor" => "paste-y",
 "forma" => "aplatanada"
 )
 );
foreach ($frutas as $i1 => $u1) {
	echo $i1."<br>";
	foreach ($u1 as $i2 => $u2) {
echo $i2." = ".$u2."<br>";
	}
}
?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
