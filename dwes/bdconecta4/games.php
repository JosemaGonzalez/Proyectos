<?php
	header ( 'Content-Type:text/xml' );

	$dbh = new PDO('mysql:host=localhost;dbname=bdconecta4', 'root', '');
	$sql = 'select * from games where estado = 0';
	$q=$dbh->prepare($sql);
	$q->execute(array());

	$doc=new DOMDocument();

	$r=$doc->createElement("games");
	$doc->appendChild($r);

	foreach($q->fetchAll() as $row){
		$e =$doc->createElement("game");
		$e->setAttribute('id', $row['id']);
		$r->appendChild($e);
	}

	print $doc->saveXML();
?>
