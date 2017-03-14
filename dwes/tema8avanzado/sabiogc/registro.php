<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';

require_once 'clases/categoria.php';
comprobarVariablesSesion();


if(!isset($_POST['registro']))
  header("Location: login.php");
else{
  $categorias = categoria::singleton();
  $arrayCategorias = $categorias->get_categorias();
}
if($_SESSION['perfil']=="invitado"){?>
<div class="col s1 m3 l4"></div>
<div class="col s10 m6 l4">
  <form method="post" style="display: inline;" action="nuevoExperto.php">
    <h4 class="center blue-text text-darken-2">Registro</h4>
    <div class="input-field col s12 m12">
      <input name="nombre" id="nombre" type="text" class="validate">
      <label for="nombre">Nombre<i class="material-icons right">face</i></label></div>
      <div class="input-field col s12 m12">
        <input name="usuario" id="usuario" type="text" class="validate">
        <label for="usuario">Usuario<i class="material-icons right">person</i></label></div>
        <div class="input-field col s12 m12">
          <input name="pass" id="password" type="password" class="validate">
          <label for="password">Contraseña<i class="material-icons right">vpn_key</i></label></div>
          <div class="input-field col s12 m12">
            <input name="email" id="email" type="email" class="validate">
            <label for="email">Email<i class="material-icons right">email</i></label></div>
            <label id="experto">Seleccione tipo de experto<i class="material-icons left">assignment_turned_in</i></label><br><br>
            <?php foreach ($arrayCategorias as $key => $value) {
              echo '<div class="col s6 m6 l6 left">';
              echo '<input type="checkbox" name="categorias[]" class="filled-in" id="'.$value[0].'" value="'.$value[0].'"/><label for="'.$value[0].'">'.$value[0].'</label>';
              echo "<br/></div>";
            }?>
            <div class="input-field col s2"></div>
            <div class="input-field col s10 m10">
              <button class="btn light-blue darken-4" type="submit" name="enviar">Registrar<i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>
        <?php
      }
      include 'includes/footer.php';
      ?>
