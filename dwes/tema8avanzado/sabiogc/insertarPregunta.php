<?php
session_start();
include 'funciones/funciones.php';
comprobarVariablesSesion();
if($_SESSION['perfil']=="experto"||!empty($_POST['anadirPregunta'])){
	$pregunta = pregunta::singleton();
	$id = $pregunta->sel_pregunta_max();
	$id = $id['id']+1;
	$target_path = "multimedia/";
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
	if(filesize(basename( $_FILES['uploadedfile']['name']))>0){
		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
		{
			echo "<span style='color:green;'>El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido</span><br>";
		}else{
			echo "Ha ocurrido un error, trate de nuevo!";
		}
		$fichero = basename( $_FILES['uploadedfile']['name']);
	}
	else{
		$fichero = "";
	}
	insertarPregunta($id,$_POST['pregunta'],$fichero,$_POST['tipoObjeto'][0],$_POST['categorias'][0],$_POST['niveles'][0],$_SESSION['idExp']);
	if(!empty($_POST['respuesta1'])){
		if(isset($_POST['check1'])){
			insertarRespuesta($id,$_POST['respuesta1'],1);
		}
		if(!isset($_POST['check1'])){
			insertarRespuesta($id,$_POST['respuesta1'],0);
		}
	}
	if(!empty($_POST['respuesta2'])){
		if(isset($_POST['check2'])){
			insertarRespuesta($id,$_POST['respuesta2'],1);
		}
		if(!isset($_POST['check2'])){
			insertarRespuesta($id,$_POST['respuesta2'],0);
		}
	}
	if(!empty($_POST['respuesta3'])){
		if(isset($_POST['check3'])){
			insertarRespuesta($id,$_POST['respuesta3'],1);
		}
		if(!isset($_POST['check3'])){
			insertarRespuesta($id,$_POST['respuesta3'],0);
		}
	}
	if(!empty($_POST['respuesta4'])){
		if(isset($_POST['check4'])){
			insertarRespuesta($id,$_POST['respuesta4'],1);
		}
		if(!isset($_POST['check4'])){
			insertarRespuesta($id,$_POST['respuesta4'],0);
		}
	}
	sleep(2);
}

header("Location:gestion.php");
?>
