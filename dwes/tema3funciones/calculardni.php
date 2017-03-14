<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Josema González</title>
</head>
<body>
<h2>Calcula letra DNI según su número</h2>
<?php
include("funciones.php");
if (!isset($_POST['submit'])){
  ?>
    <form method="post" accept-charset="utf-8">
       <input type="number" name="numeros" min="0" max="99999999" value="" placeholder="Introducir 8 números">
       <input type="submit" name="submit" value="Calcular">
    </form>
</body>
</html>
<?php
}else{
$numero = $_POST["numeros"];
$calculo = $numero%23;
echo "Su DNI es: ".$numero.$letras[$calculo];
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
