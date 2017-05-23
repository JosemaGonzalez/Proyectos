<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();
if(!isset($_POST['anadirParte'])){
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
	if($_POST['horaSalidaAula']<date('Y-m-d H:i:s')|| !isset($_POST['horaSalidaAula'])){
		$_POST['horaSalidaAula']=date('H:i:s');
	}
	if($_POST['horaLlegadaJefatura']<date('Y-m-d H:i:s')|| !isset($_POST['horaLlegadaJefatura'])){
		$_POST['horaLlegadaJefatura']=date('H:i:s');
	}
	if($_POST['horaLlegadaAulaConvivencia']<date('Y-m-d H:i:s')|| !isset($_POST['horaLlegadaAulaConvivencia'])){
		$_POST['horaLlegadaAulaConvivencia']=date('H:i:s');
	}
	$partes = partes::singleton();
	$parte = $partes->insertar_parte($_POST['fecha'],$_POST['fechaComunicacion'],$_POST['fechaConfirmacion'],$_POST['Descripcion'],$_POST['tareas'],$_POST['horaSalidaAula'],$_POST['horaLlegadaJefatura'],$_POST['horaLlegadaAulaConvivencia'],$_POST['formato'],$_POST['observaciones'],$_POST['puntos'],$_POST['estado'],$_POST['tipo'],$_SESSION['idAlu'],$_SESSION['id']);

	if(!empty($_POST['conductasAdjuntas'])){
		$ultimoParte = $partes->get_UltimoParte();
		foreach ($_POST['conductasAdjuntas'] as $check) {
			ponerNuevoRPartesConductas($ultimoParte[0],$check);
		}
	}
	header("Location:fichaAlumno.php?alu=".base64_encode($_SESSION['idAlu']));
}
