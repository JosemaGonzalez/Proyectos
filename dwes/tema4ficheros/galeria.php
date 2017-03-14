<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Josema González</title>
</head>

<body>
<h1>Galería de imágenes</h1>
<?php
    $directory="images";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (preg_match("/gif/", $archivo) || preg_match("/jpg/", $archivo) || preg_match("/png/", $archivo)){
            echo '<img style="width: 200px;" src="'.$directory."/".$archivo.'">'."\n";
        }
    }
    $dirint->close();
?>
</body>
</html>
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
