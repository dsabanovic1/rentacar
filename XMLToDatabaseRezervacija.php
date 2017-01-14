<?php
$xml=simplexml_load_file('XMLBaza.xml');

try{
	$veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");

	$sql="SELECT Ime,Prezime,Datum, Vozilo from rezervacija";
	
	$rezultat = $veza->query($sql);
	
	foreach($xml->data as $rezervacija)
		{$sql="SELECT Ime,Prezime,Datum, Vozilo from rezervacija";
	
	$rezultat = $veza->query($sql);
			
		while($red=$rezultat->fetch())
		{
			if($red[Ime]!=$rezervacija->Ime)
			{
				$ime=$rezervacija->Ime;
				$prezime=$rezervacija->Prezime;
				$datum=$rezervacija->Datum;
				$vozilo=$rezervacija->Vozilo;
				$sql="INSERT INTO vozilo (Ime,Prezime,Datum, Vozilo) VALUES('$ime','$prezime','$datum','$vozilo')";
				 $veza->exec($sql);

		}
		}}
		 echo "Novi upis uspješan";
	}		 
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}
	
	
	

	$veza = null;
?>