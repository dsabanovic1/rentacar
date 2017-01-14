<!DOCTYPE html>
<html>
   <head>
     <title>Moja Web stranica</title>
	 <meta charset="utf-8" />
	 <link rel="icon" href="img/icon4.png">
	 <link rel ="stylesheet" href="stil.css" >
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
<script >
var script = document.createElement('script');
script.src = 'script/skripta.js';
script.onload = function()
{};
document.head.appendChild(script);
</script>	   
   <body class="body"  onload="ucitaj_lokalno()">
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
				<h2> Kontakt informacije</h2>
				</header>
				<content>
				   <p>
Šabanovic d.o.o. Rent-a-car
Aleja Alije Izetbegovića 10/II, Sarajevo 71000, 
Bosna i Hercegovina

Radno vrijeme od 09:00 do 17:00</p>  
				</content>
			 </article>
		     
			 
			 <article class="bottomContent">
			    <header>
				<h2> Kontakt forma</h2>
				</header>
				<content>
				   <p><form>
                        Ime i prezime:<br>
						<input type="text" name="ime_prezime" id="kontakt_ime">
						<br>
						E-mail:<br>
						<input type="text" name="prezime" id="kontakt_email">
						<br>
						Poruka:<br>
						<textarea name="message" rows="10" cols="30" id="kontakt_poruka">
						Upišite kritiku, sugestiju, prijedlog ili pitajte šta vas zanima.
                       </textarea>
					   <br>
					   <button type="submit" onclick="sacuvaj_lokalno()" >Pošalji</button>
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

   </body>
   
</html>