<?php
$lerror=false;
$err="";
$valorNombre=$valorApellidos=$valorFecha=$valorImagen=$valorEmail=$valorPassword=$valorRadio=$valorCheck="";
if(isset($_POST['enviar'])){
	$valorNombre=$_POST['nombre'];
	$valorApellidos=$_POST['apellidos'];
	$valorFecha=$_POST['fecha'];
	$valorEmail=$_POST['email'];
	$valorPassword=$_POST['password'];
	$idiomas=$_POST['check'];
    $cursos = $_POST['curso'];

	if(empty($_POST['nombre'])||empty($_POST['apellidos'])||empty($_POST['fecha'])||empty($_POST['email'])||empty($_POST['password'])||empty($_POST['check'])||empty($_POST['curso'])){
		$lerror=true;
		$err="*Campo requerido";
	}
}
if(!isset($_POST['enviar']) OR $lerror){?>
<style type="text/css" media="screen">
div {
    margin-right: 10px;
    display: inline-block;
}
span{
	color: #FF0000;
	font-size: 10px;
}
input {
    border: 1px solid black;
}
</style>

<form method="post" accept-charset="utf-8">
        Nombre
        <input type="text" name="nombre" value="<?php echo$valorNombre ?>" placeholder=""><span><?php echo $err?><br></span>
        <br>Apellidos
 		<input type="text" name="apellidos" value="<?php echo$valorApellidos ?>" placeholder=""><span><?php echo $err?></span>
        <br>
        <br> Fecha nacimiento
        <input type="date" name="fecha" value="<?php echo$valorFecha ?>" placeholder=""><span><?php echo $err?><br><br></span> Imagen de perfil
        <input type="file" name="imagen" value="<?php echo$valorImagen ?>" placeholder=""><span><?php echo $err?><br></span>
        <br> Email de registro
        <input type="email" name="email" value="<?php echo$valorEmail ?>" placeholder=""><span><?php echo $err?> </span><br><br>Contraseña para Moodle
        <input type="password" name="password" value="<?php echo$valorPassword ?>" placeholder=""><span><?php echo $err?></span>
        <br>
        <br>Curso Matrícula
        <select name="curso[]">
    <option value="1º Desarrollo Web"> 1º Desarrollo Web <br> </option>
    <option value="2º Desarrollo Web" selected="selected"> 2º Desarrollo Web <br> </option>
    <option value="1º Administración de Sistemas"> 1º Administración de Sistemas <br> </option>
    <option value="2º Administración de Sistemas"> 2º Administración de Sistemas <br> </option></select>
    <br>
        <br>
        <div> Sexo
            <br>
            <input type="radio" name="radio" value="Hombre" checked="true" placeholder="">Hombre
            <input type="radio" name="radio" value="Mujer" placeholder="">Mujer
        </div>
        <div>Idiomas <span><?php echo $err?></span>
            <br>
            <input type="checkbox" name="check[]" value="Inglés">Inglés
            <input type="checkbox" name="check[]" value="Francés">Francés
            <input type="checkbox" name="check[]" value="Alemán">Alemán
        </div>
        <br>
        <br>
        <input type="reset" name="vaciar" value="Vaciar Campos">
        <input type="submit" name="enviar" value="Enviar">
        <br>
    </form>
<?php
}else{
echo "<div>
        Nombre: ".$_POST['nombre']."<br>Apellidos: ".$_POST['apellidos']."<br>Fecha nacimiento: ".$_POST['fecha']."        <br>Imagen de perfil<img src='php.png' width='50px' height='50px'><br>Email de registro: ".$_POST['email']."<br>Contraseña para Moodle: ".$_POST['password'];
        echo "<br>Curso matriculado: ";
foreach ($cursos as $curso){echo $curso;}

        echo "<br>Sexo: ".$_POST['radio']."<br>Idiomas: ";
    foreach ($idiomas as $idioma){echo $idioma.",";}

        echo"</div>";
    }
?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
