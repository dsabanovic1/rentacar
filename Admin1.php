<?php
$veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");

	$sql="SELECT Ime,Prezime,Datum,Vozilo from rezervacija";
	
	$rezultat = $veza->query($sql);
	while($red=$rezultat->fetch())
	{
		print $red['Ime']." ".$red['Prezime']." ".$red['Datum']." ".$red['Vozilo']."<br>";

	}
 
print '<br><a href="Dodaj.php"> Dodaj</a> ';
print '<br><a href="Rezervacija.php">vrati se na prethodnu</a>';
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

?>