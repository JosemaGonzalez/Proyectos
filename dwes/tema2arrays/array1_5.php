<?php
$mundo=array(
	"Europa"=>array("España"=>array("Madrid","Española"),"Portugal"=>array("Lisboa","Portuguesa")),
	"África"=>array("Marruecos"=>array("Marrakech","Marroquí"),"Egipto"=>array("El Cairo","Egipcia")),
	"Asia"=>array("China"=>array("Pekín","China"),"Corea del Sur"=>array("Seúl","Coreana")),
	"América"=>array("Chile"=>array("Santiago","Chilena"),"Colombia"=>array("Bogotá","Colombiana")),
	"Oceanía"=>array("Australia"=>array("Canberra","Australiana"),"Samoa"=>array("Apia","Samoana"))
	);

foreach ($mundo as $i1 => $u1) {
	echo "Continente: ".$i1;
	foreach ($u1 as $i2 => $u2) {
	echo "<br>País: ".$i2;
	foreach ($u2 as $i3 => $u3) {
		echo " , ".$u3;
	}
}
echo"<br><br>";
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
