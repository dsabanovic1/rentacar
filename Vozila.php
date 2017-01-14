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
		     <article class="slider">
			    <header>
				<h2> Naša ponuda</h2>
				</header>
				<content>
				   <p><img src="img/img2.jpg" id="slika1">
				      <img src="img/img1.jpg" id="slika2">
					  <img src="img/img3.jpg" id="slika3"></p>  
				   <div id = "lijevo"><img onClick="carousel(-1)" class="left" src="img/lstrelica.jpg"/></div>
				   <div id = "desno"><img onClick="carousel(1)" class="right" src="img/dstrelica.jpg"/></div>
				   
				</content>
			 </article>
		     
			 
			 <article class="bottomContent">
			    <header>
			       <h2> Bmw</h2>
				</header>
				<content>
				   <p><img src="img/auto.jpg" alt="slika"></p>  
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