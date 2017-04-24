<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
echo $_SESSION['perfil'];
if($_SESSION['perfil']=="invitado"){?>
<div class="row center" style="border-radius: 2%;">
<div class="col s1 m3 l4"></div>
<div class="col s10 m6 l4">
  <form method="post" style="display: inline;" action="acceso.php">
    <h4 class="center blue-text text-darken-2">Acceso</h4>
    <div class="input-field col s12 m12">
      <input name="usuario" id="usuario" type="text" class="validate">
      <label for="usuario">Usuario<i class="material-icons right">person</i></label></div>
      <div class="input-field col s12 m12">
        <input name="password" id="password" type="password" class="validate">
        <label for="password">Contraseña<i class="material-icons right">vpn_key</i></label></div>
        <div class="input-field col s2"></div>
        <div class="input-field col s10 m10">
          <button class="btn light-blue darken-2" type="submit" name="acceso">Acceder<i class="material-icons right">https</i>
          </button>
        </div>
      </form>
    </div>
    </div>
    <?php
  }
  include 'includes/footer.php';
  ?>
