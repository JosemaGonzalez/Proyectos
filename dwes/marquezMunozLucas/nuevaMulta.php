<?php
	session_start();

	

	if(!isset($_POST['enviarMulta'])){
		header("Location: index.php");
	}

	

	else{
		$hoy = getdate();
		echo $hoy['wday'].'/'.$hoy['mon'].'/'.$hoy['year'];	

		$multa=array();	
		
		$multa['matricula']=$_POST['matricula'];
		$multa['descripcion']=$_POST['descripcion'];
		$multa['fecha']=$hoy['wday'].'/'.$hoy['mon'].'/'.$hoy['year'];
		$multa['importe']=$_POST['importe'];	
		$multa['estado']='pendiente';	
		array_push($_SESSION['multa'],$multa);
		header("Location: index.php");
			
	}
?>