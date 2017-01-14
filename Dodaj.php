<?php
if(isset($_REQUEST['ime']) && isset($_REQUEST['prezime']))
				
				{
$ $veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");
						$ime = $_POST['ime'];
						$prezime =$_POST['prezime'];
						$datum=$_POST['datum'];
						$vozilo=$_POST['vozilo'];
						$sql="INSERT INTO rezervacija (Ime,Prezime,Datum,Vozilo) VALUES('$ime','$prezime','$datum','$vozilo')";
						$veza->exec($sql);
				   
				}

?>

<form action="Dodaj.php" method="POST">
      <p>Ime:<br /><input type="text" name="ime" > <br>
	  Prezime:<input type="text" name="prezime"><br>
	  Datum:<input type="date" name="datum"><br>
	  Vozilo:<input type="text" name="vozilo"><br>
	  </p>
      <input type="submit" name="dodaj" value="Pošalji">
    </form>