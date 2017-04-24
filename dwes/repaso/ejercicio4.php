<?php
session_start();
require_once 'clases/perfiles.php';

include 'includes/header.php';
include 'funciones/funciones.php';
$valido = false;
for ($i=0; $i < count($_SESSION['perfiles']) ; $i++) {
  if($_SESSION['perfiles'][$i] == "EJ4"){
    $valido = true;
  }
}
if(!$valido){
  header("Location:index.php");
}
mostrarNav();
?>
<div class="container">
  <div class="row">
    <div class="col s12 center">
      <?php
      $perf = perfiles::singleton();
      $perfiles = $perf->get_todos_perfiles();
      echo "<h4>Ficheros</h4>";
      echo "<form method=\"post\" action=\"generar.php\">";
      foreach ($perfiles as $key => $value) {
        echo "<div><input type=\"checkbox\" name=\"respuesta[]\" id=\"".$value['perfil']."\" value=\"".$value['perfil']."\"/>";
          echo "<label for=\"".$value['perfil']."\">".$value['perfil']."</label></div>";
          echo "<br>";
      }
      echo'
      <div class="row">
        <div class="col s8">
          <div class="file-field input-field">
            <div class="btn purple darken-2">
              <span>Seleccione archivo</span>
              <input type="file" name="fichero">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
            </div></div>
          ';
      //echo "<input name=\"fichero\" type=\"file\" >";
      echo '<div class="col s4 input-field">';
          echo '<button class="btn waves-effect waves-light purple darken-2" type="submit" name="generar">Generar';
          echo'<i class="material-icons right">send</i>';
          echo'</button></div></div>';
          echo "</form>";
          ?>
        </div>
      </div>
    </div>

    <?php
    include 'includes/footer.php';

    ?>
