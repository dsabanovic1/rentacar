<html>
<body>
<?php
   session_start();
  /*? if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
	{
	header("Location: Rent-a-car.php");
	} */

?>

<h2> Dobro došli admine, uspješno ste logovani</h2>
<p><a href="Rent-a-car.php"> Nazad na Početnu</a> </p>
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td></td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>
</body>
</html>