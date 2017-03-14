<?php
	session_start();

	if(!isset($_GET['indice'])){
		header("Location: index.php");
	}

	else{
		unset($_SESSION['notas'][$_GET['indice']]);
		header("Location: index.php");
	}
?>