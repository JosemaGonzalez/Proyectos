<?php
if(isset($_GET['src']))
	highlight_file(($_GET['src']));
else
echo("<br><br><a href=\"$_GET[src]\">Volver</a>");
  ?>
