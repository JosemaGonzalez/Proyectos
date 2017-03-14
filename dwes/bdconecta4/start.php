<?php
header("Content-Type:text/xml");

	$dd = new PDO('mysql:host=localhost;dbname=bdconecta4', 'root', '');
	$sql ='insert into games value(null,0,0)';
	$sth = $dd->prepare($sql);
	$sth->execute(array());
	$qid = $dd->lastInsertId();

	$doc = new DOMDocument();
	$r = $doc->createElement('game');

	$r-> setAttribute('id',$qid);
	$r-> setAttribute('turno',0);
	$r-> setAttribute('estado',0);
	$doc-> appendChild($r);
	print $doc->saveXML();
?>
