<?php
$veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");
$ime=$_GET['link'];
print 'Obrisali ste <br>'. $ime;
	$sql="DELETE from rezervacija WHERE Ime='".$ime."'" ;
	$rezultat = $veza->query($sql);
	

print '<br><a href="Admin.php">vrati se na prethodnu</a>';

?>