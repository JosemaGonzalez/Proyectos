<?php
function comprobarVariablesSesion(){
  if(!isset($_SESSION['usuarios'])){
   $_SESSION['usuarios']=array(
     array('usuario' => 'admin', 'password' => 'admin', 'perfil' => 'admin'),
     array('usuario' => 'prof', 'password' => 'prof', 'perfil' => 'prof'),
     array('usuario' => 'alum', 'password' => 'alum', 'perfil' => 'alum')
     );
 }

 if(!isset($_SESSION['notas']))
   $_SESSION['notas']=array();

 if(!isset($_SESSION['perfil']))
   $_SESSION['perfil']="invitado";
}

function mostrarNotas(){
  echo "<div class=\"table-responsive\">";
  echo "<table class=\"table table-striped\">";
  echo "<thead>";
  echo "<th>Alumno</th><th>Asignatura</th><th>primeraEv</th><th>SegundaEv</th><th>terceraEv</th>";
  echo "</thead>";
  echo "<tbody>";

  echo "<form method=\"get\" action=\"eliminarNotas.php\">";
  foreach ($_SESSION['notas'] as $key => $value) {
   echo "<tr><td>".$value['alumno']."</td>";
   echo "<td>".$value['asignatura']."</td>";
   echo "<td>".$value['primeraEv']."</td>";
   echo "<td>".$value['segundaEv']."</td>";
   echo "<td>".$value['terceraEv']."</td>";
   if($_SESSION['perfil']=="prof"){
    echo "<td><a class=\"btn btn-warning\" href=\"modificarNotas.php?indice=".$key."\">Modificar</a></td>";
    echo "<td><a class=\"btn btn-danger\" href=\"eliminarNotas.php?indice=".$key."\">Eliminar</a></td>";
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

function mostrarBotonAnadirNotas(){
  echo "<form method=\"post\" action=\"anadirNotas.php\">";
  echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"anadirNotas\" value=\"Añadir Notas\">";
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
