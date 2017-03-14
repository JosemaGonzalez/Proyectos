<?php
session_start();
$_SESSION['perfil']="invitado";
session_destroy();
header("Location: index.php");
 ?>
