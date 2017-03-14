<?php
$verbos=array(
	"Arise"=>array("Arose","Arisen","Surgir"),
	"Awake"=>array("Awoke","Awoken","Despertarse"),
	"Be"=>array("Was","Been","Ser/Estar"),
	"Bear"=>array("Bore","Borne","Soportar"),
	"Beat"=>array("Beat","Beaten","Golpear"),
	"Become"=>array("Became","Become","Llegar a ser")
	);
echo "Infinitivo&nbsp;-&nbsp;Pasado&nbsp;-&nbsp;Participio&nbsp;-&nbsp;Traducción<br>";
foreach ($verbos as $i1 => $u1) {
	echo $i1."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;";
	foreach ($u1 as $i2 => $u2) {
echo $u2."&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;";
}
echo"<br>";
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
