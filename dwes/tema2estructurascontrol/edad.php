<?php
$dia=12;
$mes="mayo";
$anno=1994;
$actual=date("Y");
echo "Naciste el ".$dia." de ".$mes." del año ".$anno."<br>";
echo "Su edad es ".($actual-$anno);
 ?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
