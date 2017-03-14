<?php
$mundo=array(
	"Paises"=>array(
		"España"=>array("Madrid"=>array("espana.jpg")),
		"Portugal"=>array("Lisboa"=>array("portugal.jpg")),
		"Marruecos"=>array("Marrakech"=>array("Marruecos.jpg")),
		"Egipto"=>array("El Cairo"=>array("egipto.jpg")),
		"China"=>array("Pekín"=>array("china.jpg")),
		"Corea del Sur"=>array("Seúl"=>array("corea.jpg")),
		"Chile"=>array("Santiago"=>array("chile.jpg")),
		"Colombia"=>array("Bogotá"=>array("colombia.jpg")),
		"Australia"=>array("Canberra"=>array("australia.jpg")),
		"Samoa"=>array("Apia"=>array("samoa.jpg")))
	);

if(!isset($_POST['enviar'])){?>
 <form action="" method="post" accept-charset="utf-8">
 <h1>Paises del mundo
 	</h1>
 	<select name="Paises[]">
 		<option selected="selected">Seleccione pais</option>
 		<?php
    foreach($mundo as $i1=>$u1){
    	foreach($u1 as $i2=>$u2){
    echo "<option value='$i2'>$i2</option>";
		}
	}
		?>
 	</select>
 	<input type="submit" name="enviar" value="Enviar">
 </form>
<?php
}else{
	//recogemos el array de paises del select
	$variable=$_POST['Paises'];
	foreach ($variable as $key => $value) {
	//echo $value;
	}
//recorremos todos los paises
foreach ($mundo as $i1 => $u1) {
	foreach ($u1 as $i2 => $u2) {
		//i2 es el pais y lo igualamos al valor que hemos pasado para sacar solo ese
		if($i2==$value){
	echo "<h1>País: ".$i2."</h1>";
	foreach ($u2 as $i3 => $u3) {
		echo "<h2>Capital: ". $i3."</h2>";
		foreach ($u3 as $i4 => $u4) {
    echo '<p>Bandera:<br><img src="' . $u4 . '" />';
		}
	}}
}
echo"<br><br>";
}}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
