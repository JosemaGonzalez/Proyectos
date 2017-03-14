<?php
session_start();
unset($_SESSION['usuarios']);
unset($_SESSION['notas']);
unset($_SESSION['perfil']);
session_destroy();
header("Location: index.php");
 ?>
