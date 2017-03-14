<?php
function comprobarVariablesSesion(){
  if(!isset($_SESSION['usuarios'])){
   $_SESSION['usuarios']=array(
     array('usuario' => 'admin', 'password' => 'admin', 'perfil' => 'admin','nombre' => 'admin','valido' => 'si'),
     array('usuario' => 'agente', 'password' => 'agente', 'perfil' => 'agente','nombre' => 'josema','valido' => 'si')
     );
 }


 if(!isset($_SESSION['multas']))
   $_SESSION['multas']=array(
    array('IdAgente' => '1', 'matricula' => '1234ABC', 'descripcion' => 'multa3','fecha' => '1/12/2016','importe' => '52','estado' => 'pagada'),
    array('IdAgente' => '1', 'matricula' => '1232ABC', 'descripcion' => 'multa4','fecha' => '1/11/2016','importe' => '25','estado' => 'pendiente'),
    array('IdAgente' => '1', 'matricula' => '1232ABC', 'descripcion' => 'multa2','fecha' => '11/11/2016','importe' => '5','estado' => 'pagada'),
    array('IdAgente' => '1', 'matricula' => '1234ABC', 'descripcion' => 'multa1','fecha' => '12/11/2016','importe' => '51','estado' => 'pendiente')
    );

 if(!isset($_SESSION['perfil']))
   $_SESSION['perfil']="invitado";
}

function mostrarBotonesSalida(){
  echo "<form method=\"post\" action=\"pages/logout.php\" style=\"display: inline;\">";
  echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"out\" value=\"Logout\">";
  echo "</form> ";
  echo " <form method=\"post\" action=\"pages/cerrarSesion.php\" style=\"display: inline;\">";
  echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"cerrar\" value=\"Cerrar sesión\">";
  echo "</form></br></br>";
}
function validarAgente(){
  echo "<div class=\"table-responsive\" style=\"width: 70%;margin: 0 auto;\">";
  echo "<table class=\"table table-striped table-bordered\" style=\"width:60%;margin:0 auto;\">";
  echo "<thead >";
  echo "<th>Usuario</th>";
  echo "<th>Perfil</th>";
  echo "<th>Nombre</th>";
  echo "<th>Válido</th>";
  echo "</thead>";
  echo "<tbody style=\"text-align:left;\">";

  foreach ($_SESSION['usuarios'] as $key => $value) {
    echo " <tr><td>".$value['usuario']."</td>";
    echo "<td>".$value['perfil']."</td>";
    echo "<td>".$value['nombre']."</td>";
    if($value['usuario']!="admin"&&$value['valido']=="no")
      echo "<td><a class=\"btn btn-warning\" href=\"validar.php?indice=".$key."\">Validar</a></td></tr>";
    else
      echo "<td><a class=\"btn btn-info disabled\">Validado</a></td></tr>";
  }
  if(isset($_GET['indice'])){
    $_SESSION['indice']=$_GET['indice'];
    $_SESSION['usuarios'][$_SESSION['indice']]['valido']='si';
    header("Location: ./validar.php");

  }

  echo "</tbody>";
  echo "</table>";
  echo "<div>";
  echo "<br>";

}
function buscarMulta($matricula){
  echo "<br>";
  echo "<div class=\"table-responsive\">";
  echo "<table class=\"table table-striped table-bordered\" style=\"width:60%;margin:0 auto;\">";
  echo "<thead>";
  echo "<th>Matrícula</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
  echo "<th>Acción</th>";
  echo "</thead>";
  echo "<tbody style=\"text-align:left;\">";

  echo "<form method=\"get\" action=\"pagar.php\">";
  foreach ($_SESSION['multas'] as $key => $value) {
    if($value['matricula']==$matricula){
      echo "<tr><td>".$value['matricula']."</td>";
      echo "<td>".$value['descripcion']."</td>";
      echo "<td>".$value['fecha']."</td>";
      echo "<td>".$value['importe']."€</td>";
      echo "<td>".$value['estado']."</td>";
      if($value['estado']=="pendiente")
        echo "<td><a class=\"btn btn-warning\" href=\"pagar.php?indice=".$key."\">Pagar</a></td>";
      else
        echo "<td><a class=\"btn btn-info disabled\" href=\"pagar.php?indice=".$key."\">Pagada</a></td>";
      echo "</tr>";
    }
  }
  echo "</table>";
  echo "<br>";

}
function mostrarMultasAgente(){
  echo "<br>";
  echo "<div class=\"table-responsive\">";
  echo "<table class=\"table table-striped table-bordered\" style=\"width:60%;margin:0 auto;\">";
  echo "<thead >";
  echo "<th>Matrícula</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
  echo "<th>Acción</th>";
  echo "</thead>";
  echo "<tbody  style=\"text-align:left;\">";

  echo "<form method=\"get\" action=\"pagar.php\">";
  foreach ($_SESSION['multas'] as $key => $value) {
    if($value['IdAgente']==$_SESSION['IdAgente']){
      echo "<tr><td>".$value['matricula']."</td>";
      echo "<td>".$value['descripcion']."</td>";
      echo "<td>".$value['fecha']."</td>";
      echo "<td>".$value['importe']."€</td>";
      echo "<td>".$value['estado']."</td>";
      if($value['estado']=="pendiente")
        echo "<td><a class=\"btn btn-warning\" href=\"pagar.php?indice=".$key."\">Pagar</a></td>";
      else
        echo "<td><a class=\"btn btn-info disabled\" href=\"pagar.php?indice=".$key."\">Pagada</a></td>";
      echo "</tr>";
    }
  }
  echo "</form>";
  echo "</tbody>";
  echo "</table>";
  echo "<div>";
  echo "<br>";

}
function mostrarMultas(){
  echo "<br>";
  echo "<div class=\"table-responsive\">";
  echo "<table class=\"table table-striped table-bordered\" style=\"width:60%;margin:0 auto;\">";
  echo "<thead >";
  echo "<th>Matrícula</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
  echo "<th>Acción</th>";
  echo "</thead>";
  echo "<tbody  style=\"text-align:left;\">";

  echo "<form method=\"get\" action=\"pagar.php\">";
  foreach ($_SESSION['multas'] as $key => $value) {
    echo "<tr>";
    echo "<td>".$value['matricula']."</td>";
    echo "<td>".$value['descripcion']."</td>";
    echo "<td>".$value['fecha']."</td>";
    echo "<td>".$value['importe']."€</td>";
    echo "<td>".$value['estado']."</td>";
    if($value['estado']=="pendiente")
      echo "<td><a class=\"btn btn-warning\" href=\"pagar.php?indice=".$key."\">Pagar</a></td>";
    else
      echo "<td><a class=\"btn btn-info disabled\" href=\"pagar.php?indice=".$key."\">Pagada</a></td>";
    echo "</tr>";

  }
  echo "</form>";
  echo "</tbody>";
  echo "</table>";
  echo "<div>";
  echo "<br>";

}
?>
