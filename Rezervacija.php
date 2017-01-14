<!DOCTYPE html>
<html>
   <head>
     <title>Moja Web stranica</title>
	 <meta charset="utf-8" />
	 <link rel="icon" href="img/icon4.png">
	 <link rel ="stylesheet" href="stil.css" >
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body class="body">
      <header class="mainHeader">
	     <img src="img/mala-ikona.jpg">
		 
		 <nav><ul>
		    <li class="aktivna"><a href="Rent-a-car.php" >Početna</a></li>
			<li><a href="Vozila.php" >Vozila</a></li>
            <li><a href="Rezervacija.php" >Rezervacija</a></li>
			<li><a href="Onama.php" >O nama</a></li>
            <li><a href="Kontakt.php" >Kontakt</a></li>
		 </ul>
		 </nav>
	  
      </header>	  
	  
	  <div class="mainContent">
	     <div class="content">
		     <article class="topContent">
			    <header>
				
				<h2> Rezervacija</h2>
				</header>
				<content>
				<?php
				if(isset($_REQUEST['ime']) && isset($_REQUEST['prezime']))
				
				{
				    //Implementirano čuvanje podataka u bazu
					    $veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");
						$ime = $_POST['ime'];
						$prezime =$_POST['prezime'];
						$datum=$_POST['datum'];
						$vozilo=$_POST['vozilo'];
						$sql="INSERT INTO rezervacija (Ime,Prezime,Datum,Vozilo) VALUES('$ime','$prezime','$datum','$vozilo')";
						$veza->exec($sql);
				   
				
				}
				
				?>
				
				   <p><form action="Rezervacija.php" method="post">
                        Ime:<br>
						<input type="text" name="ime" value="">
						<br>
						Prezime:<br>
						<input type="text" name="prezime">
						<br>
						Od kada želite auto? <br>
						<input type="date" name="datum">
						<br>
						Odaberite vozilo po želji: <br>
						<input type="text" name="vozilo"><br>
                         <br><br>
						<input type="submit" name="rezervacija" value="Rezervisi" >
                       </form>
                     					   
				   </p>  
				</content>
			 </article>
	  	

		 </div>
		  
	  </div>
	  
	  <aside class="top_sidebar">
	     <article> 
		     <h2> <img src="img/icon1.png" alt="ikonica"> </h2>
			 <p>U svako doba</p>
		 
		 </article>
		</aside>
	   <aside class="middle_sidebar">
	     <article> 
		     <h2><img src="img/icon2.png" alt ="ikonica"></h2>
			 <p>Pouzdano</p>
		 
		 </article>
		</aside> 
	 <aside class="bottom_sidebar">
	     <article> 
		     <h2><img src="img/icon3.png" alt="ikonica"></h2>
			 <p>Povoljno</p>
		 
		 </article> 
	  </aside>
	  
	  <footer class="mainFooter">
	     <p>Copyright by Dzenan Sabanovic</p>
       </footer>	
<script src="script/skripta.js" type="text/javascript"></script>	   
   </body>
   
</html>