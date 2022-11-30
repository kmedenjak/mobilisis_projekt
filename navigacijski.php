<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='hr'>
    <head>
        <title>Navigacijski dijagram</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Naslov" content="Navigacijski dijagram">
        <meta name="Autor" content="Karla Medenjak">
        <meta name="Opis" content="Stranica na kojoj se nalazi navigacijski dijagram vezan za rođendane, 13.04.2021.">
        <meta name="Tri ključne riječi" content="Dijagram, rođendan, prikaz">
        <link rel="stylesheet" href="css/kmedenjak.css" type="text/css"/>
    </head>
    <body>
        <header style="text-align: center">
            <a href="https://www.facebook.com/">
                <img class="slikaPocetna" src="multimedija/facebook-logo.png" alt="facebook">
            </a>
            <a href="https://www.instagram.com/">
                <img class="slikaPocetna" src="multimedija/instagram-logo.png" alt="instagram">
            </a>
            <a href="https://en.wikipedia.org/wiki/RSS">
                <img class="slikaPocetna" src="multimedija/rss-logo.png" alt="rss">
            </a>
            <h1>
                <a class="rodendan" href="#sadrzaj"> NAVIGACIJSKI DIJAGRAM </a>
            </h1>
        </header>

        <nav>
            <ul>
                <li class="navigacijaLi"><a href="index.php">Početna stranica</a></li>
                <li class="navigacijaLi"><a href="autor.php">Autor</a></li>
                <li class="navigacijaLi"><a href="era.php">ERA dijagram</a></li>
                <li class="navigacijaLi"><a href="galerija.php">Galerija</a></li>
                <li class="navigacijaLi"><a href="obrasci/prijava.php">Prijava</a></li>
                <li class="navigacijaLi"><a href="obrasci/registracija.php">Registracija</a></li>
                <li class="navigacijaLi"><a href="obrasci/obrazac.php">Obrazac</a></li>
            </ul>
        </nav>

        <section id="sadrzaj">
            <script>
                function promjenaDimenzijeNavigacijskogDijagrama(img) {
                    img.style.width = "1400px";
                    img.style.height = "850px";
                }
            </script>
            <h2>Navigacijski dijagram</h2>
            <img class="dijagram" src="multimedija/NavigacijskiDijagram.png" alt="NavigacijskiDijagram" onclick="promjenaDimenzijeNavigacijskogDijagrama(this)">
        </section>

        <footer class="podnozje">
            <address>Kontakt: <a href="autor.html">Karla Medenjak</a></address>
            <p>&copy; 2021 K.Medenjak</p>
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2020/zadaca_03/kmedenjak/navigacijski.html">
                <img src="multimedija/CSS3.png" alt="" width="30" height="30">
            </a>
            <a href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2020/zadaca_03/kmedenjak/navigacijski.html">
                <img src="multimedija/HTML5.png" alt="" width="30" height="30">
            </a>
        </footer>
    </body>
</html>
