<html>
<body>
<?php

$xml=simplexml_load_file('XMLBaza.xml');
$uzorak = $_GET['uzorak'];
$odgovarajuNiz=array();
foreach($xml->data as $rezervacija)
{
	if(stristr($rezervacija->Ime, $uzorak)|| stristr($rezervacija->Prezime,$uzorak))
	{
		array_push($odgovarajuNiz,$rezervacija->Ime);
	}
	
}
foreach($odgovarajuNiz as $data)
{
	$response = $data;
	
}
echo $response;



?>
</body>
<html>