</main>
<footer class="page-footer purple darken-1">
  <div class="footer-copyright">
    <div class="container">
      Realizado por <a class="purple-text text-lighten-3">Josema González</a>
      <?php
      if($_SESSION['perfil']!="invitado"){
      ?>
      <form method="post" style="display: inline; vertical-align: super;" action="cerrarSesion.php">
      <button class="btn waves-effect waves-light purple darken-2 right" type="submit" name="cerrar">Cerrar Sesión
        <i class="material-icons right">highlight_off</i>
      </button>
      </form>
      <?php } ?>
    </div>
  </div>
</footer>
</body>
</html>
