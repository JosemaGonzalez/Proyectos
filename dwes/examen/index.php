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
    <input type="submit" class="btn btn-primary" name="enviar" value="enviar">
</form><?php
}

if($_SESSION['perfil']=="alum"){
    echo "<p>Bienvenido alumno</p></br></br>";
    echo "<div id=\"cajaEnLinea\">";
    mostrarNotas();
}

if($_SESSION['perfil']=="prof"){
    echo "<p>Bienvenido profesor</p></br></br>";
    echo "<div id=\"cajaEnLinea\">";
    mostrarNotas();
    mostrarBotonAnadirNotas();
}

if($_SESSION['perfil']=="admin"){
    echo "<p>Bienvenido administrador</p></br></br>";
    echo "<div id=\"cajaEnLinea\">";
    mostrarUsuarios();
    mostrarBotonesAdministracion();
}

if($_SESSION['perfil']!="invitado"){
    mostrarBotonesSalida();
    echo "</div>";
}

include 'includes/footer.php';
?>
