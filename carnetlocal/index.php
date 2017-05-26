<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
if($_SESSION['perfil']=="invitado"){?>
<div class="row center" style="border-radius: 2%;">
  <div class="col s1 m3 l3"></div>
  <div class="col s10 m6 l6">
    <form method="post" style="display: inline;" action="acceso.php">
      <h4 class="center indigo-text text-darken-2">Acceso</h4>
      <div class="input-field col s12">
        <input name="usuario" id="usuario" type="text" class="validate">
        <label for="usuario">Usuario<i class="material-icons right">person</i></label></div>
        <div class="input-field col s12">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Contraseña<i class="material-icons right">vpn_key</i></label></div>
          <div class="input-field col s1 m2"></div>
          <div class="input-field col s10 m8">
          <button class="btn indigo darken-2 waves-effect waves-light" type="submit" name="acceso">Acceder<i class="material-icons right">https</i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <?php
  }
  include 'includes/footer.php';
  ?>
