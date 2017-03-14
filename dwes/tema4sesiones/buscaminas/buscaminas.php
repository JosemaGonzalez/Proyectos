<?php
session_start();
const NFILAS = 9;
const NCOLUMNAS = 9;
const MINAS =9;

if(!isset($_SESSION['tablero'])){
	$_SESSION['tablero']=array();
	$_SESSION['visible']=array();
	$_SESSION['com']=false;
	$_SESSION['num']=0;
	crearTablero();
}

function crearTablero(){
	for ($i=0; $i < NFILAS; $i++) {
		for ($j=0; $j < NCOLUMNAS; $j++) {
			$_SESSION['tablero'][$i][$j]=0;
			$_SESSION['visible'][$i][$j]=0;
		}
	}

	for ($n=0; $n < MINAS; $n++) {
		do{
			$fila = mt_rand(0,NFILAS-1);
			$columna = mt_rand(0,NCOLUMNAS-1);
		}while ($_SESSION['tablero'][$fila][$columna]==9);
		$_SESSION['tablero'][$fila][$columna]=9;
	for ($i=max(0,$fila-1); $i <= min(NFILAS-1,$fila+1); $i++) {
			for ($j=max(0,$columna-1); $j <= min(NCOLUMNAS-1,$columna+1); $j++) {
				if($_SESSION['tablero'][$i][$j]!=9){
					$_SESSION['tablero'][$i][$j]++;
				}
			}
		}
	}
}

function mostrarTablero(){
	for ($i=0; $i < NFILAS ; $i++) {
		echo "<br>";
		for ($j=0; $j < NCOLUMNAS ; $j++) {
			echo $_SESSION['tablero'][$i][$j];
		}
	}
}

function mostrarVisible(){
	echo "<h1>Buscaminas PHP</h1>";
	for ($i=0; $i < NFILAS ; $i++) {
		echo "<br>";
		for ($j=0; $j < NCOLUMNAS ; $j++) {
			if($_SESSION['visible'][$i][$j]==0){
				echo "<a href='buscaminas.php?fila=".$i."&columna=".$j."'><img src='cuadrado.png' width='40' height='40'/></a>";
			}
			else if($_SESSION['visible'][$i][$j]!=0){
				echo "<img src='".$_SESSION['tablero'][$i][$j].".png' width='40' height='40'/>";
			}
		}
	}
	if($_SESSION['num']<(NFILAS*NCOLUMNAS)-MINAS){
		echo "<br>Has descubierto ".$_SESSION['num']." elementos de ".(NFILAS*NCOLUMNAS)." hay ".MINAS." minas";
	}
	else{
		echo "<br><h2>HAS GANADO!!!</h2>";
	}
}

function mostrarTableroCompleto(){
	echo "<h1>Buscaminas PHP</h1>";
	for ($i=0; $i < NFILAS ; $i++) {
		echo "<br>";
		for ($j=0; $j < NCOLUMNAS ; $j++) {
			echo "<img src='".$_SESSION['tablero'][$i][$j].".png' width='40' height='40'/>";
		}
	}
}
function clickCasilla($variable1,$variable2){
	if($_SESSION['visible'][$variable1][$variable2]==0)
	{
		$_SESSION['visible'][$variable1][$variable2]=1;
		if($_SESSION['tablero'][$variable1][$variable2]==9)
		{
			$_SESSION['com']  = true;
		}
		if($_SESSION['tablero'][$variable1][$variable2]==0)
		{
			for ($i=max(0,$variable1-1); $i <= min(NFILAS-1,$variable1+1); $i++) {
				for ($j=max(0,$variable2-1); $j <= min(NCOLUMNAS-1,$variable2+1); $j++) {
					clickCasilla($i,$j);
				}
			}
		}
	$_SESSION['num']=$_SESSION['num']+1;
	}
}

if(isset($_GET['fila'])){
	clickCasilla($_GET['fila'],$_GET['columna']);
}

if($_SESSION['com']==true){
	mostrarTableroCompleto();
	echo "<br>Perdiste";
}else{
mostrarVisible();
}

?>
<br><br>
<form action="includes/cerrarsesion.php" method="post">
<input type="submit" name="" value="Cerrar Sesion / Reiniciar">
</form>
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
