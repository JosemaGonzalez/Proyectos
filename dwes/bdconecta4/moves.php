<?php
header("Content-Type:text/xml");

	$dd = new PDO('mysql:host=localhost;dbname=bdconecta4', 'root', '');
	$sql ='insert into moves (game,x,y,color) values (?,?,?,?)';
	$sth = $dd->prepare($sql);
	$sth->bindParam(1,$_GET['game']);
	$sth->bindParam(2,$_GET['x']);
	$sth->bindParam(3,$_GET['y']);
	$sth->bindParam(4,$_GET['color']);
	$sth->execute();
	$qid = $dd->lastInsertId();

	$doc = new DOMDocument();
	$r = $doc->createElement('moves');

	$r-> setAttribute('id',$qid);
	$r-> setAttribute('game',$_GET['game']);
	$r-> setAttribute('x',$_GET['x']);
	$r-> setAttribute('y',$_GET['y']);
	$r-> setAttribute('color',$_GET['color']);
	$doc-> appendChild($r);
	print $doc->saveXML();
?>
