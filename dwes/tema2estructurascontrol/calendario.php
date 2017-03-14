<?php
# definimos los valores iniciales para nuestro calendario
$month=12;
$year=2016;

# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));

$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>

<!DOCTYPE html>
<body>
<h1>Calendario en PHP</h1>
<table>
	<caption><?php echo $meses[$month]." ".$year?></caption>
	<tr>
		<th>L</th><th>M</th><th>X</th><th>J</th>
		<th>V</th><th>S</th><th>D</th>
	</tr>
	<tr>
		<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		// hacemos un bucle hasta 49, que es el máximo de valores que puede
		// haber... 7 columnas de 7 dias
		for($i=1;$i<=49;$i++)
		{
			if($i==$diaSemana)
			{
				// determinamos en que dia empieza
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// celda vacia
				echo "<td></td>";
			}else{
				// mostramos el dia
					echo "<td>$day</td>";
				$day++;
			}
			// cuando llega al final de la semana, iniciamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
</body>
</html>


<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
