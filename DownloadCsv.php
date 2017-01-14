<?php
  session_start();
  
  $xml=simplexml_load_file('XMLBaza.xml');
  $fajl=fopen('izvjestaj.csv', 'w');
  $kompletan_podatakNiz=array();
  $jedanUnosNiz=array();

foreach($xml->data as $rezervacija) 
{
	$jedanUnosNiz=array($rezervacija->Ime, $rezervacija->Prezime, $rezervacija->Datum, $rezervacija->Vozilo);
	//$kompletan_podatak=$rezervacija->Ime . " " . $rezervacija->Prezime . " " . $rezervacija->Datum . " " . $rezervacija->Vozilo;
	array_push($kompletan_podatakNiz, $jedanUnosNiz);
	
}
foreach($kompletan_podatakNiz as $podatak)
{
	fputcsv($fajl, $podatak);
}
fclose($fajl);

$file = 'izvjestaj.csv';
   			header('Content-Description: File Transfer');
   			header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename="'.basename($file).'"');
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file));
		    readfile($file);
   			 exit;
?>