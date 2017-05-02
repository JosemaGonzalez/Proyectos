<?php
session_start();

if(!isset($_POST['enviarMulta'])){
	header("Location: ./anadirMulta.php");
}
else{
	$multa=array();
	$fecha = getdate();
	$multa['IdAgente']=$_SESSION['IdAgente'];
	$multa['matricula']=$_POST['matricula'];
	$multa['descripcion']=$_POST['descripcion'];
	$multa['fecha']=$fecha['mday']."/".$fecha['mon']."/".$fecha['year'];
	$multa['importe']=$_POST['importe'];
	$multa['estado']='pendiente';
	array_push($_SESSION['multas'],$multa);
	header("Location: ./multas.php");

}
?>
