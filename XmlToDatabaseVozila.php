<?php
$xml=simplexml_load_file('XMLVozila.xml');

try{
	$veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");

	$sql="SELECT Tip,Marka,Godiste from vozilo";
	
	$rezultat = $veza->query($sql);
	
	foreach($xml->data as $vozilo)
		{
			$sql="SELECT Tip,Marka,Godiste from vozilo";
	$rezultat = $veza->query($sql);
			
		while($red=$rezultat->fetch())
		{
			if($red[Marka]!=$vozilo->MarkaVozila) //poredi samo marku vozila
			{
				$marka = $vozilo->MarkaVozila;
				$tip =$vozilo->Tip;
				$godiste=$vozilo->Username;//ovdje sam slučajno stavio u xml fajl naziv Username umjesto Godiste
				$sql="INSERT INTO vozilo (Marka,Tip,Godiste) VALUES('$marka','$tip','$godiste')";
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