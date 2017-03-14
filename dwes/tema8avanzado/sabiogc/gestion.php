<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
include 'clases/niveles.php';
comprobarVariablesSesion();

if($_SESSION['perfil']=="admin"){
 ?>

 <h4 class="center blue-text text-darken-2">Menú de administración</h4>
 <div class="input-field col s12 m12">
  <form method="post" style="display: inline;" action="insertarCategoria.php">
    <div class="input-field col s12 m4 l4"></div>
    <div class="input-field col s12 m4 l4">
      <input name="categoria" id="categoria" type="text" class="validate">
      <label for="categoria">Añadir categoría<i class="material-icons right">assignment</i></label></div>
      <div class="input-field col s6 m4 l4">
        <button class="btn light-blue darken-2" type="submit" name="anadirCat" onclick="Materialize.toast('Añadida', 1000)">Añadir<i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>

  <table class="highlight responsive-table">
    <thead>
      <tr>
        <th data-field="Usuario">Usuario</th>
        <th data-field="Email">Email</th>
        <th data-field="Validado">Validado</th>
        <th data-field="Opciones">Opciones</th>
      </tr>
    </thead>

    <tbody style="width: 305px;">
      <?php
      $experto = experto::singleton();
      $exp = $experto->get_todos_expertos();
      foreach ($exp as $key) {
        echo '<tr>';
        echo "<td>".$key['usuario']."</td>";
        echo "<td>".$key['email']."</td>";
        if($key['validada']==0){
          echo "<td><a href=\"validarExperto.php?id=".$key['id']."\" onclick=\"Materialize.toast('Validado', 1000)\" class=\"waves-effect waves-light btn green darken-2\"><i class=\"material-icons right\">thumb_up</i>Validar</a></td>";
        }
        else{
          echo "<td><a class=\"waves-effect waves-light btn disabled\"><i class=\"material-icons right\">done</i>Validado</a></td>";
        }
        echo "<td><a href=\"borrarExperto.php?id1=".$key['id']."\" onclick=\"Materialize.toast('Borrado', 1000)\"  class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons right\">delete</i>Borrar</a> <a href=\"editarExperto.php?id2=".$key['id']."\" class=\"waves-effect waves-light btn  lime darken-2\"><i class=\"material-icons right\">mode_edit</i>Editar</a></td>";

        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <?php
}
else if($_SESSION['perfil']=="experto"){
  $expcat = expcategorias::singleton();
  $selcat = $expcat->get_exp_categorias($_SESSION['idExp']);
  $niveles = niveles::singleton();
  $nivel = $niveles->get_niveles();
  ?>
  <script>
   $(document).ready(function(){
    $('.modal').modal();
    $('select').material_select();
    $('select2').material_select();
    $('select3').material_select();

    $('#modal1').height("90%");
  });
</script>
<h4 class="center blue-text text-darken-2">Menú de gestión</h4>
<div class="input-field col s12 m12 l12 center">
 <a class="waves-effect waves-light btn blue darken-2" href="#modal1">Nueva pregunta<i class="material-icons right">help</i></a>

 <!-- Modal Structure -->
 <div id="modal1" class="modal">
  <div class="modal-content">
    <form method="post" action="insertarPregunta.php" enctype='multipart/form-data'>
      <div class="input-field col s12 m8 l8">
        <input name="pregunta" id="pregunta" type="text" class="validate">
        <label for="pregunta">Añadir pregunta<i class="material-icons right">help</i></label>
      </div>
      <div class="input-field col s6 m4 l4">
        <select name="categorias[]">
          <?php
          foreach ($selcat as $key) {
            echo "<option value=\"".$key['categoria']."\">".$key['categoria']."</option>";
          }
          ?>
        </select>
        <label>Categoría</label>
      </div>
      <div class="col s12 m12 l12">
        <div class="input-field col s6 m4 l4">
          <select name="niveles[]">
            <?php
            foreach ($nivel as $key) {
              echo "<option value=\"".$key['nivel']."\">".$key['nivel']."</option>";
            }
            ?>
          </select>
          <label>Nivel</label>
        </div>
        <div class="col s6 m4 l4 input-field">
          <select name="tipoObjeto[]">
            <option value="" selected class="blue darken-2">Sólo texto</option>
            <option value="Imagen" class="blue darken-2">Imagen</option>
            <option value="Video" class="blue-text text-darken-2">Video</option>
            <option value="Sonido" class="blue-text text-darken-2">Sonido</option>
          </select>
          <label>Tipo</label>
        </div>
        <div class="col s12 m4 l4">
         <div action="#">
          <div class="file-field input-field">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            <input type="file" name='uploadedfile'>
            <div class="file-path-wrapper">
              <input class="file-path validate" placeholder="Selecciona un archivo (max 2Mb)" type="text">
              <label style="text-align: left;">Archivos</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="input-field col s12 m12 l12 center" style="margin-top: -10px;">
      <div class="input-field col s6 m6 l6">
        <div class="input-field col s10 m10 l10">
          <input name="respuesta1" id="respuesta1" type="text" class="validate">
          <label for="respuesta1">Respuesta 1:<i class="material-icons right">live_help</i></label></div>
          <div class="input-field col s1 m1 l1">
            <input type="checkbox" name="check1" class="filled-in" id="check1" /><label for="check1">Válida</label>
          </div>
        </div>
        <div class="input-field col s6 m6 l6">
          <div class="input-field col s10 m10 l10">
            <input name="respuesta2" id="respuesta2" type="text" class="validate">
            <label for="respuesta2">Respuesta 2:<i class="material-icons right">live_help</i></label></div>
            <div class="input-field col s1 m1 l1">
              <input type="checkbox" name="check2" class="filled-in" id="check2" /><label for="check2">Válida</label>
            </div>
          </div>
          <div class="input-field col s6 m6 l6">
            <div class="input-field col s10 m10 l10">
              <input name="respuesta3" id="respuesta3" type="text" class="validate">
              <label for="respuesta3">Respuesta 3:<i class="material-icons right">live_help</i></label></div>
              <div class="input-field col s1 m1 l1">
                <input type="checkbox" name="check3" class="filled-in" id="check3" /><label for="check3">Válida</label>
              </div>
            </div>
            <div class="input-field col s6 m6 l6">
              <div class="input-field col s10 m10 l10">

                <input name="respuesta4" id="respuesta4" type="text" class="validate">
                <label for="respuesta4">Respuesta 4:<i class="material-icons right">live_help</i></label></div>
                <div class="input-field col s1 m1 l1">
                  <input type="checkbox" name="check4" class="filled-in" id="check4" /><label for="check4">Válida</label>

                </div>
              </div>
            </div>
            <br>
          </div>
          <div class="modal-footer">
            <a class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            <button class="btn light-blue darken-2 right" type="submit" name="anadirPregunta" onclick="Materialize.toast('Añadida', 1000)">Añadir<i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
      <table class="highlight responsive-table">
        <thead>
          <tr>
            <th data-field="Pregunta">Preguntas</th>
            <th data-field="Opciones">Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $preguntas = pregunta::singleton();
          $pregunta = $preguntas->get_preguntas($_SESSION['idExp']);
          foreach ($pregunta as $key) {
            echo "<tr>";
            echo "<td style=\"max-width:80%;width:40%;\">".$key['pregunta']."</td>";
            echo "<td><a href=\"verPregunta.php?id=".$key['id']."\" class=\"waves-effect waves-light btn blue darken-2\"><i class=\"material-icons right\">visibility</i> Ver </a> <a href=\"borrarPregunta.php?id=".$key['id']."\" class=\"waves-effect waves-light btn red darken-2\" onclick=\"Materialize.toast('Borrado', 1000)\"><i class=\"material-icons right\">delete</i> Borrar </a> <a href=\"editarPregunta.php?id=".$key['id']."\" class=\"waves-effect waves-light btn lime darken-2\"><i class=\"material-icons right\">mode_edit</i> Editar </a></td>";
            echo "</tr>";
          }
          ?>
        </tbody></table>
        <?php
      }
      else{
        header("Location: login.php");
      }
      include 'includes/footer.php';
      ?>
