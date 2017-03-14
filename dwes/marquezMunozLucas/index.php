<?php
	session_start();
	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';
    

	comprobarVariablesSesion();

    /*
    $ipValida = false;

    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $direccionIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $direccionIp = $_SERVER['REMOTE_ADDR'];
        }
    $ipsValidasLength = count($ipsValidas);

    for($i=0;$i<$ipsValidasLength;$i++) {
        if($direccionIp == $ipsValidas[$i]) {
            $ipValida = true;
        }
    }

    if(!$ipValida) {
        header("Location: index.html");
    }
    */

    if(isset($_POST['enviar']) && !empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
        foreach ($_SESSION['usuarios'] as $key => $value) {
            if($_SESSION['usuarios'][$key]['usuario']==$_POST['usuario'] &&
                $_SESSION['usuarios'][$key]['password']==$_POST['contrasenia'])
                $_SESSION['perfil']=$_SESSION['usuarios'][$key]['perfil'];
        }
    }

          

    if($_SESSION['perfil']=="invitado"){
         echo "<a href='index.php'>Home</a>&nbsp;"; 
        echo "<a href='login.php'>Login</a>";
        mostrarMultas(); 
        
    }


    

    if($_SESSION['perfil']=="agente"){
      
        echo "<a href='index.php'>Home</a>&nbsp;";
         
        echo "<a href='logout.php'>Logout</a>";
        mostrarMultas();
        mostrarBotonAnadirMultas();
    }

    if($_SESSION['perfil']=="admin"){
    
        echo "<a href='index.php'>Home</a>&nbsp;"; 
        echo "<a href='logout.php'>Logout</a>";
        mostrarMultas();

        mostrarBotonesAdministracion();
    }

    if($_SESSION['perfil']!="invitado"){
        mostrarBotonesSalida();
        echo "</div>";
    }

	include 'includes/footer.php';
?>