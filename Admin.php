<?php
$veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");

	$sql="SELECT Ime,Prezime,Datum,Vozilo from rezervacija";
	
	$rezultat = $veza->query($sql);
	print 'Ispis svih rezervacija <br>';
	foreach($rezultat as $red)
	{    //ispis svih rezervacija iz baze
		print $red['Ime']." ".$red['Prezime']." ".$red['Datum']." ".$red['Vozilo'];
		print ' <a href="ObrisiRezervaciju.php?link=' .$red['Ime'].'">Obriši</a> <a href="Izmijeni.php">Izmijeni</a>';
	    print '<br>';
	}
	if(isset($_REQUEST['marka']) && isset($_REQUEST['tip']))
				
				{
				         //unos novog vozila u bazu
						$marka = $_POST['marka'];
						$tip =$_POST['tip'];
						$godiste=$_POST['godiste'];
						$sql="INSERT INTO vozilo (Marka,Tip,Godiste) VALUES('$marka','$tip','$godiste')";
						$veza->exec($sql);
				   
				
				}
	
       
	
	
	
 
print '<br><a href="Dodaj.php"> Dodaj</a> ';
print '<br><a href="Rezervacija.php">vrati se na prethodnu</a>';
print '<br><a href="XmlToDatabaseVozila.php">Učitaj Vozila iz Xml-a u bazu</a>';
print '<br><a href="XmlToDatabaseKorisnik.php">Učitaj Registrovane korisnike iz Xml-a u bazu</a>';
print '<br><a href="XmlToDatabaseRezervacija.php">Učitaj Rezervacije iz Xml-a u bazu</a>';
print '<p> Unos novog vozila: <br>
				   <form action="Admin.php" method = "post"">
                        Marka Vozila<br>
						<input type="text" name="marka" id ="vozilo">
						<br>
						Tip:<br>
						<input type="text" name="tip" id ="tip_vozila">
						<br>
						Godište:<br>
						<input type="text" name="godiste" id="godina">
						<br>
						<input type="submit" value="Unesi vozilo">
						</form>
				   </p>   ';
				   
	print 'Ispis svih vozila<br>';
	$sqli="SELECT Marka,Tip,Godiste from vozilo";
	//ispis svih vozila iz baze
	$rezultati = $veza->query($sqli);
	foreach($rezultati as $red)
	{
		print $red['Marka']." ".$red['Tip']." ".$red['Godiste'];
		print ' <a href="ObrisiVozilo.php?link=' .$red['Marka'].'">Obriši</a> <a href="Izmijeni.php">Izmijeni</a>';
	    print '<br>';
	  }			   

?>