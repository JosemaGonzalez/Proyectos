<?php
$mesactual = date('m');
$diaactual = date('d');
echo "Hoy es el dia ".$diaactual." del mes ".$mesactual;
if($mesactual== 1||$mesactual== 2||($mesactual== 3&&$diaactual<=20)||($mesactual== 12&&$diaactual>20)){
	echo "<center><img src='invierno.jpg' border='0px' width='90%' height='90%'></center>";
}
if(($mesactual==3&&$diaactual>20)||$mesactual== 4||$mesactual== 5||($mesactual== 6&&$diaactual<=20)){
	echo "<center><img src='primavera.jpg' border='0px' width='90%' height='90%'></center>";
}
if(($mesactual==6&&$diaactual>20)||$mesactual== 7||$mesactual== 8||($mesactual== 9&&$diaactual<=20)){
	echo "<center><img src='verano.jpg' border='0px' width='90%' height='90%'></center>";
}
if(($mesactual==9&&$diaactual>20)||$mesactual== 10||$mesactual== 11||($mesactual== 12&&$diaactual<=20)){
	echo "<center><img src='oto.jpg' border='0px' width='90%' height='90%'></center>";
}
 ?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
