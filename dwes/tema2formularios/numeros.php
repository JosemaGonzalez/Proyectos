<?php
$array=array();
for ($i=1; $i <= 50; $i++) {
$array[]=$i;
}

if(!isset($_POST['enviar'])){?>
 <form action="" method="post" accept-charset="utf-8">
 <h1>Suma de números
 	</h1>
 	<select name="numeros[]">
 		<option selected="selected">Seleccione números a sumar</option>
 		<?php
   		 foreach($array as $i1=>$u1){
   			 echo "<option value='$u1'>$u1</option>";
		}
		?>
 	</select>
 	<select name="numeros1[]">
 		<option selected="selected">Seleccione rango mínimo</option>
 		<?php
   		 foreach($array as $i1=>$u1){
   			 echo "<option value='$u1'>$u1</option>";
		}
		?>
 	</select>
 	<select name="numeros2[]">
 		<option selected="selected">Seleccione rango máximo</option>
 		<?php
   		 foreach($array as $i1=>$u1){
   			 echo "<option value='$u1'>$u1</option>";
		}
		?>
 	</select>

 	<input type="submit" name="enviar" value="Enviar">
 </form>
<?php
}else{
	//recogemos el array de numeros del select
	$num=$_POST['numeros'];
	$min=$_POST['numeros1'];
	$max=$_POST['numeros2'];
	$suma=0;
	$aleatorio=0;
	foreach ($num as $key => $numeros) {
	//echo $value;
	}
	foreach ($min as $key1 => $minimo) {
	//echo $value;
	}
	foreach ($max as $key2 => $maximo) {
	//echo $value;
	}
	if ($maximo>$minimo) {
	for ($i=1; $i <= $numeros ; $i++) {
		$aleatorio=rand($minimo,$maximo);
		echo $i."ª Suma: ".$suma." + ".$aleatorio;
		$suma=$suma+$aleatorio;
		echo "= ".$suma."<br>";
	}
} 	else {
	echo "El rango minimo es mayor que el rango máximo";
	}
}
 ?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
