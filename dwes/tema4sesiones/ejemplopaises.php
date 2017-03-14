<?php
session_start();
if(!isset($_SESSION['paises']))
	$_SESSION['paises']=array('España'=>'Madrid','Portugal'=>'Lisboa');
 ?><center>
 <form method="post" accept-charset="utf-8">
 	País: <input type="text" name="pais" value="" placeholder=""><br><br>
 	Capital: <input type="text" name="ciudad" value="" placeholder=""><br><br>
 	<input type="submit" name="enviar" value="Enviar">
 </form>
 <?php
if(isset($_POST['enviar'])){
	$_SESSION['paises'][$_POST['pais']] = $_POST['ciudad'];
}
?>
<table style="border: 1px solid black;">
	<tr>
	<th>País</th><th>Capital</th>
	</tr>
	<?php
foreach ($_SESSION['paises'] as $i1 => $u1) {
echo "<tr><td>".$i1." </td>"."<td>".$u1." </td></tr>";
}
//para cerrar una sesion usamos unset
//unset($_SESSION['paises']);

?>
</table>

