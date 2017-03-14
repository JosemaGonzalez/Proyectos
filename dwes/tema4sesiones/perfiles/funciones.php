<?php
function comprobarVariable()
{
	if(!isset($_SESSION['usuarios'])){
		$_SESSION['usuarios']=array();
		$_SESSION['usuarios'][0]=array('user'=>'admin','pass'=>'admin');
		$_SESSION['usuarios'][1]=array('user'=>'profe','pass'=>'profe');
		$_SESSION['usuarios'][2]=array('user'=>'alum','pass'=>'alum');
	}
	if(!isset($_SESSION['notas'])){
		$_SESSION['notas']=array();
	}
	if(!isset($_SESSION['perfil'])){
		$_SESSION['perfil']="invitado";
	}
	//print_r($_SESSION['usuarios']);
}
?>
