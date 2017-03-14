<?php
include 'config.php';

if($ipsValidas[0]==$_SERVER['HTTP_HOST']||$ipsValidas[1]==$_SERVER['REMOTE_ADDR']){
	if (!isset($_GET['page'])) {
		include("pages/index.php");
	} else {
		include("pages/".$_GET['page'].".php");
	}
}else{
	echo "No tienes acceso";
}
?>
