<?php
session_start();
unset($_SESSION['com']);
session_destroy();
header("Location: autbasica.php");
 ?>
