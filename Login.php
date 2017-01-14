<html>
<body>
<?php
session_start();
$xml=simplexml_load_file('adminXML.xml');
$username = $xml->admin[0]->username;
$password= $xml->admin[0]->password;

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
	
	print '<p> Već ste logovani</p>';
	
}

else if(isset($_POST['username']) && isset($_POST['password']))
{
	if($_POST['username'] == $username && $_POST['password']==$password)
	{
		$_SESSION['loggedin']=true;
//		header("Location: succes.php");
	print '<p> Uspjesno ste logovani</p>';
	}
	
}
print ' <a href="Rent-a-car.php" > Povratak na pocetnu</a> ';


?>
	
