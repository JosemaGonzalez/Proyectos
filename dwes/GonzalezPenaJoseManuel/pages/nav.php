<?php
include 'funciones.php';
comprobarVariablesSesion();
?>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="menu navbar-right">
        <?php
        if($_SESSION['perfil']=="admin"){?>
        <li><a>Administrador</a>
          <ul>
            <li><a href="pages/validar.php">Validar Agentes</a></li>
            <li><a href="pages/resumen.php">Resumen de multas</a></li>
          </ul>
        </li> <?php
      }
      if($_SESSION['perfil']=="agente" && $_SESSION['valido']=="si"){?>

      <li><a>Agentes</a>
        <ul>
          <li><a href="pages/multas.php">Multas</a></li>
          <li><a href="pages/infoagente.php">Mi cuenta</a></li>
        </ul>
      </li>
      <?php
    }
    if($_SESSION['perfil']=="invitado"){?>
    <li><a>Ciudadanos</a>
      <ul>
        <li><a href="pages/infracciones.php">Infracciones</a></li>
        <li><a href="regagentes/regagentes.php">Registrar Agente</a></li>
        <li><a href="pages/cerrarSesion.php">Salir</a></li>
      </ul></li>
      <?php
    }
    ?>
  </ul>
</div>
</div>
</nav>
