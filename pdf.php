<?php
 require("/fpdf/fpdf.php");
 $xml=simplexml_load_file('XMLBaza.xml');
 $kompletan_podatakNiz=array();

foreach($xml->data as $rezervacija) 
{
	$kompletan_podatak=$rezervacija->Ime . " " . $rezervacija->Prezime . " " . $rezervacija->Datum . " " . $rezervacija->Vozilo;
	array_push($kompletan_podatakNiz, $kompletan_podatak);
	
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B","20");

foreach($kompletan_podatakNiz as $podatak){
	
   $pdf->MultiCell(0,10,$podatak);
}

$pdf->Output();

?>