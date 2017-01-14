<?php
$xml=simplexml_load_file('XMLRegistracija.xml');

try{
	$veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");

	$sql="SELECT Ime,Email,Nickname, Password from korisnik";
	
	$rezultat = $veza->query($sql);
	
	foreach($xml->data as $korisnik)
		{
			$sql="SELECT Ime,Email,Nickname, Password from korisnik";
	$rezultat = $veza->query($sql);
			
		while($red=$rezultat->fetch())
		{
			if($red[Ime]!=$korisnik->ImePrezime)
			{
				$ime = $korisnik->ImePrezime;
				$email =$korisnik->Email;
				$nickname=$korisnik->Username;
				$pass=$korisnik->Password;
				$sql="INSERT INTO korisnik (Ime,Email,Nickname,Password) VALUES('$ime','$email','$nickname','$pass')";
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