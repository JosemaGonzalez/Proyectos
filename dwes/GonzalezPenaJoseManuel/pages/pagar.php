<?php
	session_start();

	if(!isset($_GET['indice'])){
		header("Location: ../index.php");
	}
	else{
		$_SESSION['multas'][$_GET['indice']]['estado']="pagada";
		header("Location: ../index.php");
	}
?>
