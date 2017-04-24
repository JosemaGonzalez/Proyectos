<?php
	session_start();
	$_SESSION['perfil']="invitado";
	$_SESSION['perfiles']=[];
	header("Location: index.php");
?>