<?php
$alumnos = array(
	"Josema González",
	"Alejando Carrillo",
	"Juan Antonio Cubero",
	"Roberto Carlos Flores",
	"Óscar Heredia",
	"Miguel Ángel López",
	"Antonio Luque",
	"Lucas Márquez",
	"Estela Muñoz",
	"Pablo Sánchez",
	"Miguel Ángel Zamora",
	"Lourdes Magarín",
	"Jaime Rabasco",
	"Maria del Carmen Tripiana");

$busqueda = $_GET["busqueda"];
if ($busqueda != "") {
	foreach ($alumnos as $alumno) {
		if(stristr($alumno,$busqueda)){
			if(!isset($coincidencias)){
				$coincidencias = "<li>".$alumno."</li>";
			}else{
			//mirar salto de linea
				$coincidencias .= "<li>" . $alumno."</li>";
			}
		}
	}
}
if (!isset($coincidencias)) {
	echo "No hay coincidencias";
}else{
	echo "<ul>".$coincidencias."</ul>";
}
?>
