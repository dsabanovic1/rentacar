/*
function get(link)
{

	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            document.open();
            document.write(ajax.responseText);
            document.close();
        }
        if (ajax.readyState == 4 && ajax.status == 404)
        alert("error");
	
	
       
    }
    ajax.open("GET", link + ".php", true);
	     
	ajax.send();	
	
}
*/
var imagecount1=1;
var imagecount2=2;
var imagecount3=3;
var total=5;

function carousel(x) {
	var Image1 = document.getElementById('slika1');
	var Image2 = document.getElementById('slika2');
	var Image3 = document.getElementById('slika3');
	imagecount1=imagecount1+x;
	imagecount2=imagecount2+x;
	imagecount3=imagecount3+x;
	if(imagecount1>total ) {imagecount1=1;}
	if(imagecount2>total ) {imagecount2=1;}
	if(imagecount3>total) {imagecount3=1;}
	if(imagecount1<1) {imagecount1=total;}
	if(imagecount2<1){imagecount2=total;}
	if(imagecount3<1){imagecount3=total;}
	console.log(imagecount1);
    Image1.src = "img/img" + imagecount1 + ".jpg";
	Image2.src = "img/img" + imagecount2 + ".jpg";
	Image3.src = "img/img" + imagecount3 + ".jpg";
	
}


function sacuvaj_lokalno()
{
	var smjesteno_ime = document.getElementById('kontakt_ime').value
	var smjesteno_email=document.getElementById('kontakt_email').value;
	var smjesteno_poruka=document.getElementById('kontakt_poruka').value;
	
	localStorage.setItem('text1', smjesteno_ime);
	localStorage.setItem('text2', smjesteno_email);
	localStorage.setItem('text3' , smjesteno_poruka);
	
	
}

function ucitaj_lokalno()
{
	var ucitano_ime=localStorage.getItem('text1');
	if(ucitano_ime)
	{  console.log(ucitano_ime);
		document.getElementById('kontakt_ime').value=ucitano_ime;
	}
	var ucitano_email=localStorage.getItem('text2');
	if(ucitano_email)
	{  console.log(ucitano_email);
		document.getElementById('kontakt_email').value=ucitano_email;
	}
	var ucitano_poruka=localStorage.getItem('text3');
	if(ucitano_poruka)
	{  console.log(ucitano_poruka);
		document.getElementById('kontakt_poruka').value=ucitano_poruka;
	}
	
	
}
function validirajRegistraciju()
{
	
	var ime=document.getElementById('ime').value;
	var email=document.getElementById('email').value;
	var nadimak=document.getElementById('nadimak').value;
	var sifra = document.getElementById('pass').value;
	var regexIme=/^[a-z ,.'-]+$/i;
	var regexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(!email || !regexMail.test(email))
	{
         
		return false;
	}
	if(!ime || !regexIme.test(ime))
	{
		return false;
	}
	
	return true;
}


		function f()
		   {
				  window.history.back();
		   }