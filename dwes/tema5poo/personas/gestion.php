<?php
require_once 'persona.php';
require_once 'perro.php';

if(!isset($_SESSION['perro'])&&!isset($_SESSION['persona'])){
	$_SESSION['persona']='';
	$_SESSION['perro']=array();
}
class Gestion
{
	public function ejecutar()
	{
		?>
		<h1>Gestión de mascotas</h1>
		<h2>Persona</h2>
		<form action="" method="post" accept-charset="utf-8">
			<input type="text" name="nombreper" value="" placeholder="Nombre">
			<input type="number" name="edad" value="" placeholder="Edad"><br>
			<input type="radio" name="sexo" value="Hombre" checked> Hombre<br>
			<input type="radio" name="sexo" value="Mujer"> Mujer<br>
			<div id='fotopersona'></div>
			<input type="submit" name="submit1" value="Crear Persona">
		</form>
		<h2>Perro</h2>
		<form action="" method="post" accept-charset="utf-8">
			<input type="text" name="nombreperro" value="" placeholder="Nombre">
			<input type="date" name="fechanac" value="" placeholder="Fecha de nacimiento">
			<select id='color'>Color:
				<option value='negro'>Negro</option>
				<option value='blanco'>Blanco</option>
				<option value='marron'>Marron</option>
				<option value='otro'>Otro</option>
			</select>
			<select id='raza'>Raza:
				<option value='dalmata'>Dalmata</option>
				<option value='husky'>Husky</option>
				<option value='labrador'>Labrador</option>
				<option value='pastoraleman'>Pastor Alemán</option>
				<option value='beagle'>Beagle</option>
				<option value='yorkshire'>Yorkshire</option>
				<option value='boxer'>Boxer</option>
				<option value='grandanes'>Gran Danés</option>
				<option value='galgo'>Galgo</option>
				<option value='sanbernardo'>San Bernardo</option>
			</select>
			<div id='fotoperros'>
				<?php
				//echo "<img src='".$.".png' width='40' height='40'/>";
				?>
			</div>
			<input type="submit" name="submit2" value="Crear perro">
		</form>
		<?php

	}
}
$index = new Gestion();
$index->ejecutar();
?>
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
