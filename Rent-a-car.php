
<html>
   <head>
     <title>Moja Web stranica</title>
	 <meta charset="utf-8" />
	 <link rel="icon" href="img/icon4.png">
	 <link rel ="stylesheet" href="stil.css" >
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body class="body">
   
<?php
session_start();
if(isset($_SESSION['loggedin']))
{
	print '<p>vec ste logovani</p>
	<a href ="LogOut.php">Log Out<a/>';
	
	
}else
{
	
	print '<form action="Login.php" method="post" >
				   LOGIN: <br>
				   Username:
				   <input type="text" name="username">
                   <br>
                   Password: <input type="password" name="password">
				   <br>
				   <input type="submit" value ="LOG IN">
				   </form> ';
}

?>


   
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
				<content> <p>
				   <img src="img/naslovna.jpg" alt="slika">
                 </p>				   
				</content>
			 </article>
	  	     
			 <article class="bottomContent">
			    <header>
				
				<h2> Registracija</h2>
				</header>
				<content>
				
				   <p>
				   <form action="Rent-a-car.php" method = "post" onsubmit="return validirajRegistraciju()">
                        Ime:<br>
						<input type="text" name="ime" id ="ime_prezime">
						<br>
						E-mail:<br>
						<input type="text" name="email" id ="email">
						<br>
						Nickname:<br>
						<input type="text" name="nadimak" id="nadimak">
						<br>
						Password:<br>
						<input type="password" name="sifra" id="pass">
						<br>
						<input type="submit" value="Registruj se">
						</form>
				   </p>  
				   <?php
				      if(isset($_REQUEST['ime']) && isset($_REQUEST['email']))
				   {    //umjesto u xml podaci sa forme se čuvaju u bazi
					    $veza = new PDO("mysql:dbname=rent; host=localhost;charset=utf8", "admin1", "pass");
						$ime = $_POST['ime'];
						$email =$_POST['email'];
						$nickname=$_POST['nadimak'];
						$pass=$_POST['sifra'];
						$sql="INSERT INTO korisnik (Ime,Email,Nickname,Password) VALUES('$ime','$email','$nickname','$pass')";
						$veza->exec($sql);
				   }
				?>
				   <?php if(isset($_SESSION['loggedin'])){print '<a href="Admin.php">Admin Stranica</a><br>
                                                                 <a href="pdf.php">PDF EXPORT</a> <br>
																 <a href="DownloadCsv.php">Download Csv sadrzaj</a><br>
																 <script>
																			function showResult(str) {
																			  if (str.length==0) { 
																				document.getElementById("livesearch").innerHTML="";
																				document.getElementById("livesearch").style.border="0px";
																				return;
																			  }
																			  else{
																			  xmlhttp=new XMLHttpRequest();
																			  xmlhttp.onreadystatechange=function() {
																				if (this.readyState==4 && this.status==200) {
																				  document.getElementById("livesearch").innerHTML=this.responseText;
																				  document.getElementById("livesearch").style.border="1px solid #A5ACB2";
																				}
																			  }
																			  xmlhttp.open("GET","livesearch.php?uzorak="+str,true);
																			  xmlhttp.send();
																			}
																			}
																			
																			function showAll(str) {
																			  if (str.length==0) { 
																				document.getElementById("search").innerHTML="";
																				document.getElementById("search").style.border="0px";
																				return;
																			  }
																			  else{
																			  xmlhttp=new XMLHttpRequest();
																			  xmlhttp.onreadystatechange=function() {
																				if (this.readyState==4 && this.status==200) {
																				  document.getElementById("search").innerHTML=this.responseText;
																				  document.getElementById("search").style.border="1px solid #A5ACB2";
																				}
																			  }
																			  xmlhttp.open("GET","search.php?uzorak="+str,true);
																			  xmlhttp.send();
																			}
																			}
																</script>
																 <form>
																<input type="text" size="30" onkeyup="showResult(this.value)">
																<button onclick="showAll()">Trazi</button>
																<div id="livesearch"></div>
																</form>'; }
				                       
				   ?>
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