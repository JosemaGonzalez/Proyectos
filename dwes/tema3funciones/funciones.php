<?php
$letras = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T');
function iniciales($value,$value2)
{
	$cadena=$value[0];
	$cadena1=$value2[0];
	$cadena2="";
	$cadena3="";
	if(strpos($value," "))
	{
		$numero= strpos($value," ");
		$cadena2=$value[$numero+1];
	}
	else{
		$cadena2="";
	}
	if(strpos($value2," "))
	{
		$numero1 = strpos($value2," ");
		$cadena3=$value2[$numero1+1];
	}
	else{
		$cadena3="";
	}
	$resultado=$cadena.$cadena2.$cadena1.$cadena3;
	return $resultado;
}
function validar($pass){
	$resultado="La contraseña es correcta";
	$patron='/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/';
	trim($pass);
	if (!preg_match($patron,$pass)) {
		$resultado="La contraseña debe tener 8 dígitos, mayúsculas, minúsculas, números y caracteres especiales";
	}
	return $resultado;
}

function sumar($num){
	if ($num == 0)
		return $num;
	else
		return sumar($num / 10) + ($num % 10);
}
function invertir($num){
	echo ($num%10);
	if((int)($num/10)!=0)
		invertir((int)($num/10));
}
?>
