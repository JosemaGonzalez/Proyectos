<?php
function conexionBD($dbname,$usuario,$pass)
{
	try{
		$db =new PDO('mysql:host=localhost;
			dbname='.$dbname.';charset=utf8',
			$usuario,
			$pass);
		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
		$db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND , "SET NAMES utf8");
		return($db);
	} catch (PDOException $e) {
		print "<p>Error: ".$e->getMessage()."</p>\n";
	}
}
function desconexionBD($dbname){
	$dbname = null;
}

function insertarContacto($nombre,$numero){

}
function mostrarContactos($db){
	try{
		$consulta1 = $db->prepare('SELECT count(*) FROM contactos');
		$consulta1->execute();
		$result1 = $consulta1->fetchColumn(0);
		if($result1<1){
			print "<p>No hay datos</p>\n";
		}
		else{
			$consulta2 = $db->prepare('SELECT * FROM contactos');
			$consulta2->execute();
			$result2 = $consulta2->fetchAll();
			if (!$result2) {
				print "<p>No hay registros</p>\n";
			}
			else {
				foreach ($result2 as $valor) {
					print "<tr><td>$valor[nombre] </td><td>$valor[telefono]</td></tr>\n";
				}
			}
		}
	}catch(PDOException $e){
		echo "ERROR: " . $e->getMessage();
	}

}
function buscarContacto($db,$nombre){
	try{
		$consulta1 = $db->prepare('SELECT count(*) FROM contactos where nombre like :nombre');
		$consulta1->execute(array(":nombre" => "%$nombre%"));
		$result1 = $consulta1->fetchColumn(0);
		if($result1<1){
			print "<p>No hay coincidencias</p>\n";
		}
		else{
			$consulta2 = $db->prepare('SELECT * FROM contactos where nombre like :nombre');
			$consulta2->execute(array(":nombre" => "%$nombre%"));
			$result2 = $consulta2->fetchAll();
			foreach ($result2 as $valor) {
				print "<tr><td>$valor[nombre] </td><td>$valor[telefono]</td></tr>\n";
			}
		}
	}catch(PDOException $e){
		echo "ERROR: " . $e->getMessage();
	}
}
function borrarContacto($nombre){

}
function modificarContacto($nombre){

}
?>
