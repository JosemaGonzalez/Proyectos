<?php
session_start();
include("includes/encabezado.php");
if(!isset($_SESSION['agenda'])){
    $_SESSION['agenda']=array();
}
 ?>
 <h3>Menú Principal</h3>
    <form action="index.php" method="get" accept-charset="utf-8">
    <input type="text" name="page" value="" placeholder="Búsqueda">
    <input type="submit" name="page" value="anadir">
    <div id="lista">
    <?php
    if(isset($_POST["nombre"])&&isset($_POST["telefono"])){
        $contacto  = array($_POST["nombre"]=>intval($_POST["telefono"]));
    array_push($_SESSION['agenda'],$contacto);
    }
    ?>
    <p>Listado de contactos</p>
    <table>
    <?php
        echo "<tr> Nombre =></tr><tr> Teléfono</tr>";?>
        </table>
        <table>
        <?php
    foreach($_SESSION['agenda'] as $key) {
            foreach($key as $campo=>$valor) {
}
        echo "<tr> ".$campo." =></tr><tr> ".$valor."</tr>";
        echo "<br>";
}
     ?>

    </table>
    </div>
    </form>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>

<?php
include("includes/pie.php");
 ?>
