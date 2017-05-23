<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ficheros</title>
</head>
<body>
	<main>
		<h1>Conversor .txt a .xml</h1>
		<?php
		if (!isset($_POST['enviar'])) {
			?>
			<form action="index.php" method="post" enctype='multipart/form-data'>
				<input type="file" name="fichero"/><br><br>
				<input type="text" name="titulo" placeholder="Inserte título">
				<input type="submit" name="enviar" value="Enviar"/>
			</form>
			<p>
				Ayuda:<br>
				Subir un archivo .txt, su formato sería:<br>
				- Enunciado en una línea, respuesta en la siguiente, y así para las demás <br>
				<br>Ayuda para el título:<br>
				- Para escribir el título si se quiere poner un contador escribir:  Pregunta {n} <br>
				- Para escribir el título si se quiere poner la fecha de hoy escribir:  Pregunta {date} <br>
				- Para escribir el título si se quiere poner la hora actual escribir:  Pregunta {time} <br>
				- Se pueden combinar todos los posibles casos.
			</p>
			<?php
		}
		else {
			if (!empty($_POST['titulo']) && filesize($_FILES['fichero']['tmp_name']) > 0) {
				$titulo = $_POST['titulo'];
				$fecha = date("j/n/Y");
				$hoy = date("H:i:s");
				$cont=1;
				$cont2=1;
				$fori= "{date}";
				$dori= "{time}";
				$nori= "{n}";

				$inicio= '<?xml version="1.0" ?><quiz>';
				$contenido = '<question type="essay"><name><text>';
				$contenido2 = '</text></name><questiontext format="html"><text>';
				$contenido3= '</text></questiontext><generalfeedback format="html"><text>';
				$final = '</text></generalfeedback></question>';
				$archivotxt = fopen( $_FILES['fichero']['tmp_name'], "r" );
				$filename = "des/fichero".rand(0,99999).".xml";
				$archivoxml = fopen($filename, "a+") or die("Problemas al generar el fichero.");
				fputs($archivoxml,$inicio.PHP_EOL);

				$titulo2 = str_replace($fori,$fecha,$titulo);
				$titulo2 = str_replace($dori,$hoy,$titulo2);

				while( feof($archivotxt) == false ){
					$aDatos = fgets( $archivotxt, 9999);

					if($cont%2!=0){
						fputs($archivoxml,$contenido.PHP_EOL.
							str_replace($nori,$cont2,$titulo2)
							.PHP_EOL.
							$contenido2.PHP_EOL.
							$aDatos.PHP_EOL.
							$contenido3.PHP_EOL);
						$cont2++;
					}
					else{
						fputs($archivoxml,$aDatos.PHP_EOL.
							$final.PHP_EOL);
					}
					$cont++;
				}
				fputs($archivoxml,"</quiz>");

				fclose($archivoxml);
				fclose($archivotxt);
				echo "Enviado!.<br/>";
				//unlink($filename);
				echo '<form action="index.php" method="post" accept-charset="utf-8">
				<a href="'.$filename.'" download>Descargar</a>
				<input type="submit" name="volver" value="Volver">
			</form>';
		}else{
			echo 'Escriba un título o seleccione un fichero correcto<form action="index.php" method="post" accept-charset="utf-8">
			<input type="submit" name="volver" value="Volver">
		</form>';
	}
}

?>
</main>
</body>
</html>
