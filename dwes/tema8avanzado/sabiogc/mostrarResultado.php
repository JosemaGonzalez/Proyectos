 <?php
	session_start();
	require_once 'clases/respuestas.php';
	if(isset($_GET['id']) && isset($_GET['valor'])){
		$respuestas = respuestas::singleton();
		$comRespuestas = $respuestas->com_respuestas($_GET['id'],$_GET['valor']);

	    if($comRespuestas['valida']==0) {
	   		$_SESSION['resp']="0";
	    }
	    else{
	   		$_SESSION['resp']="1";
	    }

	}
		header("Location: jugar.php");
?>
