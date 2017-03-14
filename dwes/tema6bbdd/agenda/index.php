<?php
if (!isset($_GET['page'])) {
    include("pages/home.php");
} else {
    include("pages/".$_GET['page'].".php");
}
?>
