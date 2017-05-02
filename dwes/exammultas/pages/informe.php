<?php
	session_start();
	include '../includes/header.php';
    include 'funciones.php';


    if(!isset($_POST['buscar']))
		header("Location: ../index.php");

    else{
    	$contador=0;
		$encontrado=false;
		$arrayMultas=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
		$arrayMeses=array('Enero','Febrero','Marzo','Abril','Mayo','Junio',
						'Julio','Agosto','Septiembre','Octubre','Noviembre',
						'Diciembre');

	    foreach ($_SESSION['multas'] as $key => $value) {
	        if(substr($value['fecha'],6,4)==$_POST['ano']){
	        	$encontrado=true;
	            $mes=intval(substr($value['fecha'],3,2));
	            $arrayMultas[$mes-1]++;
	        }
	    }

	    echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<thead style = \"color:#999; background-color: #333\">";
        echo "<th>Mes</th><th>Multas</th>";
        echo "</thead>";
        echo "<tbody>";

	    for($i=0;$i<12;$i++){
          	echo "<tr><td>".$arrayMeses[$i]."</td><td>".$arrayMultas[$i]."</td></tr>";
          	$contador+=$arrayMultas[$i];
	    }

        echo "<tr style= \"background-color:#337ab7; color:#eceeef\"><td>Total</td><td>".$contador."</td></tr>";

	    echo "</tbody>";
        echo "</table>";
   		echo "<div>";?>
<?php
	}

    include '../includes/footer.php';
?>
