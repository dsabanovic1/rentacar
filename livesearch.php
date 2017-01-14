<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("XMLBaza.xml");
$x=$xmlDoc->getElementsByTagName('data');

$uzorak = $_GET['uzorak'];

if (strlen($uzorak)>0) {
  $rezultat="";
  for($i=0; $i<($x->length); $i++) {
    $ime=$x->item($i)->getElementsByTagName('Ime');
    $prezime=$x->item($i)->getElementsByTagName('Prezime'); 
	
      if (stristr($ime->item(0)->nodeValue,$uzorak) || stristr($prezime->item(0)->nodeValue,$uzorak) )
	  {
        if ($rezultat=="") {
          $rezultat=$ime->item(0)->nodeValue. " " . $prezime->item(0)->nodeValue ;
        } else {
          $rezultat=$rezultat . "<br>".  $ime->item(0)->nodeValue. " ". $prezime->item(0)->nodeValue ;
        }
      }
    
  }
}


if ($rezultat=="") {
  $response="Nema rezultata";
} else {
  $response=$rezultat;
}

echo $response;


?>