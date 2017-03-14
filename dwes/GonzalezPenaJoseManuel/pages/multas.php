<?php
session_start();
include '../includes/header.php';
include 'funciones.php';
if($_SESSION['validacion']==1){

echo "<h3>Agente ".$_SESSION['nombre']."</h3><br>";

echo "<form method=\"post\" action=\"anadirMulta.php\">";
echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"anadirMulta\" value=\"Añadir Multa\">";
echo "</form> ";
mostrarMultasAgente();
}
else{
	header("Location: ../index.php");
}
include '../includes/footer.php';
?>
