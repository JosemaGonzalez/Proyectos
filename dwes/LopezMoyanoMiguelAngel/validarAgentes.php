<?php
	session_start();
	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';

    if(!isset($_POST['validarAgentes']))
		header("Location: index.php");

	else{
		echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<thead style = \"color:#999; background-color: #333\">";
        echo "<th>Usuario</th>";
        echo "<th>Nombre</th>";
        echo "<th>Validado</th>";
        echo "<th>Acción</th>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($_SESSION['agentes'] as $key => $value) {
        	echo " <tr><td>".$value['usuario']."</td>";
            echo "<td>".$value['nombre']."</td>";
            echo "<td>".$value['validado']."</td>";
            if($value['validado']!="true")
                echo "<td><a class=\"btn btn-danger\" href=\"valida.php?indice=".$key."\">Validar</a></td></tr>";
            else
                echo "<td><a class=\"btn btn-danger disabled\" href=\"valida.php?indice=".$key."\">Validar</a></td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
   		echo "<div>";?>
        <form method="post" action="index.php">
            <input type="submit" class="btn btn-primary" name="volver" value="Volver">
        </form><?php
	}

    include 'includes/footer.php';
?>