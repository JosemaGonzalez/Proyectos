<?php
$lerror=false;
$nameErr=$emailErr="";
$valorName="";
$valorEmail="";
if(isset($_POST['submit'])){
	$valorName=$_POST['name'];
	$valorEmail=$_POST['email'];
	if(empty($_POST['name'])){
		$lerror=true;
		$nameErr="*Nombre requerido";
	}
	if(empty($_POST['email'])){
		$lerror=true;
		$emailErr="*Email requerido";
	}
}
if(!isset($_POST['submit']) OR $lerror){?>
<form method="post" accept-charset="utf-8">
	Nombre <input type="text" name="name" value="<?php echo$valorName ?>" placeholder=""><?php echo $nameErr?><br>
	Email <input type="text" name="email" value="<?php echo$valorEmail ?>" placeholder=""><?php echo $emailErr?><br>
	<input type="submit" name="submit" value="Enviar">
</form>
<?php
}else{
echo "Nombre: ".$valorName."<br>Email: ".$valorEmail;
}
?>
<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
