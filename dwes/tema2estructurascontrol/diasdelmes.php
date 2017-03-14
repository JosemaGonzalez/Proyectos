<?php
$mes= 2;
$anno= 2012;
$dia=0;
if ($mes==1||$mes==3||$mes==5||$mes==7||$mes==8||$mes==10||$mes==12) {
	$dia=31;
}
if ($mes==4||$mes==6||$mes==9||$mes==11) {
	$dia=30;
}
if($mes==2){
	$dia=28;
	if ($anno%4==0) {
		$dia=29;
	}
}
echo "El mes ".$mes." del año ".$anno." tiene ".$dia." dias";
 ?>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
