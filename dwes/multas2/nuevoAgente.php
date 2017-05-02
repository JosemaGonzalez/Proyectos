<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_POST['enviarAgente'])){
		header("Location: index.php");
	}

	else{
		if($_POST['pass']!=$_POST['pass2']){
			echo "<h2>Error. Las contraseñas no coinciden</h2>";?></br><br>
			<form method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
			</form><?php
		}

		else{
			$agente=array();
			$agente['usuario']=$_POST['usuario'];
			$agente['password']=$_POST['pass'];
			$agente['nombre']=$_POST['nombre'];
			$agente['validado']="false";
			array_push($_SESSION['agentes'],$agente);
			header("Location: index.php");
		}
	}

	include 'includes/footer.php';
?>