<?php
	session_start();
	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';

    comprobarVariablesSesion();

    if(isset($_POST['enviar']) && !empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
        foreach ($_SESSION['usuarios'] as $key => $value) {
            if($_SESSION['usuarios'][$key]['usuario']==$_POST['usuario'] &&
                $_SESSION['usuarios'][$key]['password']==$_POST['contrasenia'])
                $_SESSION['perfil']=$_SESSION['usuarios'][$key]['perfil'];
        }
    }

    if($_SESSION['perfil']=="invitado"){?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <label>Usuario </label> <input type="text" name="usuario"></br></br>
        <label>Contraseña </label> <input type="password" name="contrasenia"><br/><br/>
        <input type="submit" class="btn btn-primary" name="enviar" value="Login">
        </form><?php
    }

 	echo "<div id=\"cajaEnLinea\">";
    if($_SESSION['perfil']=="agente"){
        echo "<p>Bienvenido agente</p></br></br>";
        mostrarBotonAnadirMultas();

    }

    if($_SESSION['perfil']=="admin"){
        echo "<p>Bienvenido administrador</p></br></br>";
        mostrarBotonesAdministracion();
    }

    if($_SESSION['perfil']!="invitado"){
        mostrarBotonesSalida();
    }

    echo "</br>";
    mostrarBotonAnadirAgente();
    echo "</br></br></br>";?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <label>Buscar por matrícula: </label> 
    <input type="text" name="matricula">
    <input type="submit" class="btn btn-primary" name="buscar" value="Buscar"></br></br>
    </form>
    <?php

    if(isset($_POST['buscar']) && !empty($_POST['matricula'])){
        mostrarMultasPorMatricula($_POST['matricula']);
    }

    else
        mostrarMultas();
    echo "</div>";

    include 'includes/footer.php';
?>