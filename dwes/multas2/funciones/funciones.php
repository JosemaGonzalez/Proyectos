<?php
	function comprobarVariablesSesion(){
		if(!isset($_SESSION['usuarios'])){ 
       		$_SESSION['usuarios']=array(
        							array('usuario' => 'admin', 'password' => 'admin', 'perfil' => 'admin')
                                    );
	    }

	    if(!isset($_SESSION['agentes']))
	        $_SESSION['agentes']=array();

	    if(!isset($_SESSION['multas']))
	        $_SESSION['multas']=array();
	    
	    if(!isset($_SESSION['perfil']))
	        $_SESSION['perfil']="invitado";
	}

	function mostrarMultas(){
		echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<thead style = \"color:#999; background-color: #333\">";
        echo "<th>Matrícula</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
        echo "<th>Acción</th>";
        echo "</thead>";
        echo "<tbody>";

        echo "<form method=\"get\" action=\"pagarMulta.php\">";
        foreach ($_SESSION['multas'] as $key => $value) {
          	echo "<tr><td>".$value['matricula']."</td>";
          	echo "<td>".$value['descripcion']."</td>";
          	echo "<td>".$value['fecha']."</td>";
          	echo "<td>".$value['importe']."</td>";
          	echo "<td>".$value['estado']."</td>";
          	if($value['estado']=="pendiente")
                echo "<td><a class=\"btn btn-warning\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
            else
                echo "<td><a class=\"btn btn-warning disabled\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
            echo "</tr>";

        }
        echo "</form>";
        echo "</tbody>";
        echo "</table>";
   		echo "<div>";
	}

    function mostrarMultasPorMatricula($matricula){
        echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<thead style = \"color:#999; background-color: #333\">";
        echo "<th>Matrícula</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
        echo "<th>Acción</th>";
        echo "</thead>";
        echo "<tbody>";

        echo "<form method=\"get\" action=\"pagarMulta.php\">";
        foreach ($_SESSION['multas'] as $key => $value) {
            if($value['matricula']==$matricula){
                echo "<tr><td>".$value['matricula']."</td>";
                echo "<td>".$value['descripcion']."</td>";
                echo "<td>".$value['fecha']."</td>";
                echo "<td>".$value['importe']."</td>";
                echo "<td>".$value['estado']."</td>";
                if($value['estado']=="pendiente")
                    echo "<td><a class=\"btn btn-warning\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
                else
                    echo "<td><a class=\"btn btn-warning disabled\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
                echo "</tr>";
            }
        }
    }

	function mostrarBotonAnadirAgente(){
		echo "<form method=\"post\" action=\"registroAgentes.php\">";
		echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"registroAgentes\" value=\"Registrar Agente\">";
        echo "</form> ";
	}

	function mostrarBotonAnadirMultas(){
		echo "<form method=\"post\" action=\"anadirMulta.php\">";
		echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"anadirMulta\" value=\"Añadir Multa\">";
        echo "</form> ";
	}

	function mostrarBotonesSalida(){
		echo "<form method=\"post\" action=\"logout.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"out\" value=\"Logout\">";
        echo "</form> ";
        echo " <form method=\"post\" action=\"cerrarSesion.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"cerrar\" value=\"Cerrar sesión\">";
        echo "</form></br></br>";  
	}

	function mostrarBotonesAdministracion(){
		echo "<form method=\"post\" action=\"validarAgentes.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"validarAgentes\" value=\"Validar Agentes\">";
        echo "</form> ";
        echo " <form method=\"post\" action=\"informes.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"informes\" value=\"Informes\">";
        echo "</form> ";  
	}

?>