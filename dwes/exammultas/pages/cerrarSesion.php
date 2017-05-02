<?php
session_start();
session_unset();
session_destroy();
session_start();
$_SESSION['validacion']=0;
$_SESSION['perfil']="invitado";
session_regenerate_id(true);
header("Location: ../index.php");
?>
