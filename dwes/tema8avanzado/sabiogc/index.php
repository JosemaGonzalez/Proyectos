<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
?>
<div class="col s1 m3 l4"></div>
<div class="col s10 m6 l4">
  <div class="card">
    <div class="card-image">
      <img src="includes/trivial.jpg">
      <span class="card-title"></span>
      </div>
  <div class="center light-blue darken-1 card-action">
      <a class="white-text" href="jugar.php"><i class="material-icons right">play_arrow</i>Jugar</a>
  </div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
