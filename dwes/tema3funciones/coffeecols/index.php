<?php
if (!isset($_GET['page'])) {
    include("pages/homepage.php");
} else {
    include("pages/".$_GET['page'].".php");
}
?>

<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
