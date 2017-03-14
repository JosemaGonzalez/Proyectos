<?php
include("includes/encabezado.php");
if(!isset($_SESSION['agenda'])){
    $_SESSION['agenda']=array();

}
if(!isset($_POST['enviar'])){
 ?>
 <h3>Añadir contacto</h3>
    <form action="index.php" method="post" accept-charset="utf-8">
    Nombre:
    <input type="text" name="nombre"  placeholder="">
    Número
    <input type="number" name="telefono" placeholder="">

    <input type="submit" name="enviar" value="crear">
    </form>
<?php
}/*
else{
$contacto  = array($_POST["nombre"]=>$_POST["telefono"]);
	array_push($_SESSION['agenda'],$contacto);
}*/
 ?>
<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>

<?php
include("includes/pie.php");
 ?>
