# Upute


1. Potrebno je preuzeti neki lokalni host preko kojeg se hosta server, na primjer Xampp (link: https://www.apachefriends.org/download.html)
2. Nakon instalacije, potrebno je porenuti Xampp te pokrenuti Apache i MySQL (opcija start)
3. Postrebno je postaviti datoteke unutar mape xampp (putanja: C://xampp/htdocs/projekt) - dio putanje "projekt" odnosi se na ovo kreiranu datoteku unutar koje     se postavljaju datoteke iz gita
4. U Web preglednik potrebno upisati http://localhost/projekt/index.php
  4.1. Ako dođe do greše, odnosno da se MySQL ne želi pokrenuti, potrebno je napraviti sljedeće korake:
        a) Kod MySQL-a pritisnuti gumb Config (unutar prozora Xampp-a) i odabrati my.ini -> na mjestu gdje je port=3306, postaviti na port=3307
                -> 20. i 28. linija u datoteci my.ini
        b) kliknuti na Config gumb (kraj kojeg se nalazi sličica), pritisnuti gumb Service and Port Settings -> tab MySQL -> Main Port postaviti na 3307
5. Postaviti bazu na PhyMyAdmin
   5.1. Ako dođe do problema, otići u datoteku xampp na C disku pa zatim u mapu phpMyAdmin te otvoriti datoteku config.inc (putanja: C://xampp/phpMyAdmin/config.inc i dodati ovu liniju koda 
        $cfg['Servers'][$i]['port'] = '3307'; 
6. Na Web pregledniku napisati URL: http://localhost/phpmyadmin
7. Kliknuti na opciju New kako bi se dodala baza i nazvati bazu webdip2020x059
8. Odabrati opciju import te iz mape projekt (putanja: C://xampp/htdocs/projekt) odabrati bazu naziva WebDiP2020x059
9. Refresh stranice na kojoj je otvorena početna stranica (korak 4)


# Uloge

1. Admin
    -korisničko ime: kmedenjak
    -lozinka: kmedenjak007
3. Moderator
    -korisničko ime: jura1412
    -lozinka: jura1412...
5. Registrirani korisnik
    -korisničko ime: anica123
    -lozinka: lozinka12Ana
7. Neregistrirani korisnik
    -nema prijave
  
