<?php
$restar=substr ($_SERVER['PHP_SELF'], -9);
$restar2=substr ($_SERVER['PHP_SELF'], -10);
if($restar!="index.php"&&$restar2!="rMulta.php"){
?>
<br><br>
<form method="post" action="../index.php">
	<input type="submit" class="btn btn-primary" name="volver" value="Volver">
</form>
<?php
}
?>
</div></div><footer><h4>
&#169; Josema González - Examen PHP</h4></footer></body></html>
