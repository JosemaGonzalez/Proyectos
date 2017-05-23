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
			<form action="index.php" method="post" accept-charset="utf-8">
				<input type="file" name="fichero"><br><br>
				<input type="submit" name="enviar" value="Enviar">
			</form>
			<?php
		}
		else{
			$inicio= '<?xml version="1.0" ?>';
			$contenido = '<quiz><question type="essay"><name><text>';
			$contenido2 = '</text></name><questiontext format="html"><text>';
			$contenido3= '</text></questiontext><generalfeedback format="html"><text>';
			$final = '</generalfeedback></question></quiz>';
			$archivotxt = fopen( $_POST['fichero'], "r" );
			$archivoxml = fopen("fichero2.xml", "a") or die("Problemas al generar el fichero.");
			fputs($archivoxml,$inicio.PHP_EOL);
			$cont = 0;
			while( feof($archivotxt) == false )
			{
				$aDatos = fgets( $archivotxt, 9999);
				$bDatos = explode("@",$aDatos);
				print_r($bDatos);


				fputs($archivoxml,$contenido.PHP_EOL);
				fputs($archivoxml,"Pregunta ".($cont+1).PHP_EOL);
				fputs($archivoxml,$contenido2.PHP_EOL);
				fputs($archivoxml,$bDatos[0].PHP_EOL);
				fputs($archivoxml,$contenido3.PHP_EOL);
				fputs($archivoxml,$bDatos[1].PHP_EOL);
				fputs($archivoxml,$final.PHP_EOL);
				$cont++;
			}
			fclose($archivoxml);
			fclose($archivotxt);
			echo "Enviado!.<br/>";

			echo '<form action="index.php" method="post" accept-charset="utf-8">
			<input type="submit" name="" value="Volver">
		</form>';
	}
	?>
</main>
</body>
</html>
