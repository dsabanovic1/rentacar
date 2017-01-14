spirala 4
Napravljena je mysql baza sa 3 povezane tabele(rezervacija, vozilo, korisnik)
Napravljene su 3 php skripte koje podatke iz xmla prebacuju u bazu podataka.
(dostupno samo adminu na stranici admin.php)
Prepravljene su php skripte te se podaci sa formi upisuju u bazu podataka. 
Takoðer podaci se uèitavaju iz baze i prikazuju na adminovoj stranici
Omoguæeno je brisanje podataka na stranici i brišu se iz baze.
Šta nije uraðeno ? 
Nije uraðeno web servisi

Bugovi? 

Prilikom rada ssa tabelom "rezervacija" ne rade ispravno brisanje i dodavanej 
novog reda u tabeli zbog foreign keya. Potrebno je uèitati ostale dvije tabele i 
u select-box ih dodati odakle bi se birali podaci za tabelu rezervacija(vozilo i korisnik su foreign 
key u rezervaciji).


Napravio sam novi repozitorij za cetvrtu spirali jer mi se stari nesto zeznuo 
link na stari repozitorij: https://github.com/dsabanovic1/Rent-a-car


 http://rentacaragencija-rentacar.44fs.preview.openshiftapps.com 
