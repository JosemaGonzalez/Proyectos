<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';

comprobarVariablesSesion();
if(!isset($_GET['id2'])){
  header("Location:gestion.php");
}
else{
  $categorias = categoria::singleton();
  $arrayCategorias = $categorias->get_categorias();
  $_SESSION['exp'] = $_GET['id2'];
  ?>
   <style type="text/css" media="(max-width: 992px)">
    td input{
      margin: 0 !important;
    }
    tbody td {
      padding: 4px;
    }
 </style>

  <h4 class="center blue-text text-darken-2">Editando Experto</h4>
  <form method="post" action="guardarEditarExperto.php">
    <table class="highlight responsive-table">
      <thead>
        <tr>
          <th data-field="nombre">Nombre</th>
          <th data-field="usuario">Usuario</th>
          <th data-field="password">Password</th>
          <th data-field="email">Email</th>
          <th data-field="validado">Validado</th>
          <th data-field="categorias">Categorias</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $experto = experto::singleton();
        $exp = $experto->get_experto($_GET['id2']);
        echo '<tr>';
        echo "<td><input type=\"text\" name=\"nombre\" value=\"".$exp['nombre']."\"></td>";
        echo "<td><input type=\"text\" name=\"usuario\" value=\"".$exp['usuario']."\"></td>";
        echo "<td><input type=\"text\" name=\"password\" value=\"".$exp['password']."\"></td>";
        echo "<td><input type=\"text\" name=\"email\" value=\"".$exp['email']."\"></td>";
        if($exp['validada']==1){
          echo "<td><a href=\"validarCambio.php?valido=0&valido1=".$_GET['id2']."\" onclick=\"Materialize.toast('No validado', 1000)\" class=\"waves-effect waves-light btn green darken-2\"><i class=\"material-icons right\">thumb_up</i></a></td>";
        }
        else{
          echo "<td><a href=\"validarCambio.php?valido=1&valido1=".$_GET['id2']."\" onclick=\"Materialize.toast('Validado', 1000)\" class=\"waves-effect waves-light btn red darken-2\"><i class=\"material-icons right\">thumb_down</i></a></td>";
        }
        echo "<td>";
        foreach ($arrayCategorias as $key => $value) {
          echo '<div class="col s6 m6 l6 left">';
          echo '<input type="checkbox" name="categorias[]" class="filled-in id="'.$value[0].'" value="'.$value[0].'"/><label  for="'.$value[0].'">'.$value[0].'</label>';
          echo "<br/></div>";
        }
        echo "</td>";

        echo "</tr>";
        ?>
      </tbody>
    </table>
    <br>
    <div class="col s3 m4 l4 center"></div>
    <div class="col s6 m4 l4 center">
      <button type="submit" class="waves-effect waves-light btn blue darken-4 center" onclick="Materialize.toast('Editado', 1000)">Editar<i class="material-icons right">send</i></button>
    </div>
  </form>
  <?php

}
include 'includes/footer.php';
?>
