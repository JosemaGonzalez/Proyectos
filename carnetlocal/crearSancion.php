<?php
session_start();
include 'funciones/funciones.php';
include 'clases/sanciones.php';
include 'clases/rpartessanciones.php';
comprobarVariablesSesion();
if(!isset($_POST['anadirSancion'])){
	header("Location:index.php");
}
else{
	if($_POST['fecha']<date('Y-m-d H:i:s') || !isset($_POST['fecha'])){
		$_POST['fecha']=date('Y-m-d H:i:s');
	}
	if($_POST['fechaComunicacion']<date('Y-m-d H:i:s')|| !isset($_POST['fechaComunicacion'])){
		$_POST['fechaComunicacion']=date('Y-m-d H:i:s');
	}
	if($_POST['fechaConfirmacion']<date('Y-m-d H:i:s')|| !isset($_POST['fechaConfirmacion'])){
		$_POST['fechaConfirmacion']=date('Y-m-d H:i:s');
	}
	if($_POST['fechaInicio']<date('Y-m-d H:i:s')|| !isset($_POST['fechaInicio'])){
		$_POST['fechaInicio']=date('Y-m-d H:i:s');
	}
	if($_POST['fechaFinal']<date('Y-m-d H:i:s')|| !isset($_POST['fechaFinal'])){
		$_POST['fechaFinal']=date('Y-m-d H:i:s');
	}

	$sanciones = sanciones::singleton();
	$sancion = $sanciones->insertar_sancion($_POST['fecha'],$_POST['fechaComunicacion'],$_POST['fechaConfirmacion'],$_POST['fechaInicio'],$_POST['fechaFinal'],$_POST['Sancion'],$_POST['observaciones'],$_POST['Evaluacion'],$_POST['puntos'],$_POST['tipo'],$_POST['estado'],$_SESSION['idAlu']);
	if(!empty($_POST['partes'])){
		$ultimaSancion = $sanciones->get_UltimaSancion();
		$rpartessanciones = rpartessanciones::singleton();
		foreach ($_POST['partes'] as $check) {
			$rpartessanciones->insertar_rPartesSanciones($check,$ultimaSancion[0]);
		}
	}
	header("Location:fichaAlumno.php?alu=".base64_encode($_SESSION['idAlu']));
}
