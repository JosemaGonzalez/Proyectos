<?php
	function comprobarVariablesSesion(){
		if(!isset($_SESSION['usuarios'])){ 
       		$_SESSION['usuarios']=array(
        							array('usuario' => 'admin', 'password' => 'admin', 'perfil' => 'admin')        							
                                    );
	    }

	    if(!isset($_SESSION['multa']))
	        $_SESSION['multa']=array();

      if(!isset($_SESSION['idMulta']))
          $_SESSION['idMulta']=0;
	    
	    if(!isset($_SESSION['perfil']))
	        $_SESSION['perfil']="invitado";
	}

	function mostrarMultas(){
    ?><br/><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <label>Buscar</label> 
        <input type="text" name="textoAbuscar">     
        <input type="submit" name="buscar" value="Buscar"> 
    </form> <?php

     if(isset($_POST['buscar'])){ 
        foreach ($_SESSION['multa'] as $key => $value) { 
            if($_POST['textoAbuscar']==$value['matricula']){ 
                echo "</br>"; 
                echo "<h4>Encontrada coincidencia:</h4>"; 
                echo $value['matricula']." ";  
                echo $value['descripcion']." ";  
                echo $value['fecha']." ";  
                echo $value['importe']." ";                  
                echo $value['estado']; 
                if($_SESSION['perfil']=="agente" && $value['estado']=="pendiente"){

                  echo "<td><a class=\"btn btn-warning\" href=\"pagarMultas.php?indice=".$key."\">pagar Multa</a></td>"; 
                }

            } 
        } 
    } 


		echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped\">";
        echo "<thead>";
        echo "<th>Matricula</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
        echo "</thead>";
        echo "<tbody>";

        echo "<form method=\"get\" action=\"eliminarNotas.php\">";
		foreach ($_SESSION['multa'] as $key => $value) {
          	echo "<tr><td>".$value['matricula']."</td>";
          	echo "<td>".$value['descripcion']."</td>";
          	echo "<td>".$value['fecha']."</td>";     
            echo "<td>".$value['importe']."</td>"; 
            echo "<td>".$value['estado']."</td>";                                  

          	if($_SESSION['perfil']=="agente" && $value['estado']=="pendiente"){
              echo "<td><a class=\"btn btn-warning\" href=\"pagarMultas.php?indice=".$key."\">pagar Multa</a></td>";
          		
            }
        }
        echo "</form>";

        echo "</tbody>";
        echo "</table>";
   		echo "<div>";
	}

	function mostrarBotonesSalida(){
		echo "<form method=\"post\" action=\"logout.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"out\" value=\"Logout\">";
        echo "</form> ";
        echo " <form method=\"post\" action=\"cerrarSesion.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"cerrar\" value=\"Cerrar sesión\">";
        echo "</form></br></br>";  
	}

	function mostrarBotonAnadirMultas(){
		echo "<form method=\"post\" action=\"anadirMultas.php\">";
		echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"anadirMultas\" value=\"Añadir Multa\">";
        echo "</form> ";
	}

  function mostrarBotonPagarMultas(){
    echo "<form method=\"post\" action=\"PagarMultas.php\">";
    echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"pagarMultas\" value=\"Pagar Multa\">";
        echo "</form> ";
  }

	function mostrarBotonesAdministracion(){
		echo "<form method=\"post\" action=\"anadirUsuario.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"anadirUsuario\" value=\"Añadir usuario\">";
        echo "</form> ";
	}

	function mostrarUsuarios(){
		echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped\">";
        echo "<thead>";
        echo "<th>Usuario</th>";
        echo "<th>Perfil</th>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($_SESSION['usuarios'] as $key => $value) {
        	echo " <tr><td>".$value['usuario']."</td>";
            echo "<td>".$value['perfil']."</td>";
            if($value['usuario']!="admin")
                echo "<td><a class=\"btn btn-danger\" href=\"eliminarUsuarios.php?indice=".$key."\">Eliminar</a></td></tr>";
            else
                echo "<td><a class=\"btn btn-danger\" disabled=\"true\" href=\"eliminarUsuarios.php?indice=".$key."\">Eliminar</a></td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
   		echo "<div>";
	}
?>