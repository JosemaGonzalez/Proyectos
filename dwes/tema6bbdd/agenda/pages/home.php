<?php
session_start();
include("includes/encabezado.php");
include("includes/funciones.php");
$db = conexionBD("agenda","agenda","agenda");

?>
<h3>Menú Principal</h3>
<form action="index.php" method="post" accept-charset="utf-8">
    <input type="text" name="nombre" value="" placeholder="Búsqueda">
    <input type="submit" name="submit" value="buscar">
    <?php
    if(isset($_POST["nombre"])&&isset($_POST["telefono"])){
    }
    if(isset($_POST["nombre"])&&isset($_POST["submit"])&&$_POST["nombre"]!=''){
        ?>
        <div id="lista">
            <h3>Buscar contactos</h3>
            <table>
                <?php
                echo "<tr><td>Nombre</td><td>Teléfono</td></tr>";?>
                <?php
                buscarContacto($db,$_POST["nombre"]);
                ?>

            </table>
        </div>
        <?php
    }else{


        ?>
        <div id="lista">
            <h3>Listado de contactos</h3>
            <table>
                <?php
                echo "<tr><td>Nombre</td><td>Teléfono</td></tr>";?>
                <?php
                mostrarContactos($db);
                ?>

            </table>
        </div>
        <?php
    }
    ?>
</form>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>

<?php
include("includes/pie.php");
?>
