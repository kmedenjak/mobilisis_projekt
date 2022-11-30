<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='hr'>
    <head>
        <title>{$naslov}</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Naslov" content="Početna stranica">
        <meta name="Autor" content="Karla Medenjak">
        <meta name="Opis" content="Početna stranica na kojoj se nalazi tablica, 19.03.2021.">
        <meta name="Tri ključne riječi" content="Rođendan, tablica, slika">
        <link rel="stylesheet" href="{$putanja}/css/{$tema}" media="screen" type="text/css"/>
        <link rel="stylesheet" href="{$putanja}/css/{$tema}" media="print" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{$putanja}/javascript/kmedenjak_pomoc.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">-->
        <!--<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
        <script src="javascript/kmedenjak_jquery.js"></script>-->
    </head>

    <body>
        <header style="text-align: center">
            <a href="https://www.facebook.com/">
                <img class="slikaPocetna" src="{$putanja}/multimedija/facebook-logo.png" alt="facebook">
            </a>
            <a href="https://www.instagram.com/">
                <img class="slikaPocetna" src="{$putanja}/multimedija/instagram-logo.png" alt="instagram">
            </a>
            <a href="{$putanja}/rss.php">
                <img class="slikaPocetna" src="{$putanja}/multimedija/rss-logo.png" alt="rss">
            </a>
                <img class="slikaPocetna" id="ikonaTeme" style="float: left;" src="{$putanja}/multimedija/ikonaPristupacnosti.png" alt="ikona">
                <img class="slikaPocetna" id="ikonaDark" style="float: left;" src="{$putanja}/multimedija/darkLight.png" alt="ikonaDark">
            <h1>
                <a class="rodendan" href="#sadrzaj"> {$glavniNaslov} </a>
            </h1>

        </header>

        <nav class ="stupac_1">
            <ul class="navigacijaLi">
                <li><a href="{$putanja}/index.php">Početna stranica</a></li>
                {if isset($smarty.session.uloga) && $smarty.session.uloga == 1}
                    <li><a href="{$putanja}/grupa.php">Grupa</a></li>
                    <li><a href="{$putanja}/prikazDnevnika.php">Dnevnik</a></li>
                {/if}
                {if isset($smarty.session.uloga) && $smarty.session.uloga <= 2}
                    <li><a href="{$putanja}/rodendan.php">Rođendan</a></li>
                    <li><a href="{$putanja}/popisRodendana.php">Popis rođendana</a></li>
                {/if}
                {if isset($smarty.session.uloga) && $smarty.session.uloga <= 3}
                <li><a href="{$putanja}/rezervacija.php">Rezervacija</a></li>
                {/if}
                {if isset($smarty.session.uloga) && $smarty.session.uloga < 4} 
                    <li><a href="{$putanja}/galerija.php">Galerija</a></li>
                    <li><a href="{$putanja}/odjava.php">Odjava</a></li>
                    <li><a href="{$putanja}/dokumentacija.php">Dokumentacija</a></li>
                    <li><a href="{$putanja}/autor.php">Autor</a></li>
                {else}
                <li><a href="{$putanja}/dokumentacija.php">Dokumentacija</a></li>
                <li><a href="{$putanja}/autor.php">Autor</a></li>
                <li><a href="{$putanja}/obrasci/prijava.php">Prijava</a></li>
                <li><a href="{$putanja}/obrasci/registracija.php">Registracija</a></li>
                {/if}
                
                
            </ul>
        </nav>
        <section id="sadrzaj">
<script>
    $("#ikonaTeme").click(function (){
        var kolacic = document.cookie;
        if(kolacic.includes("kmedenjak.css")){
            document.cookie = "tema=kmedenjak_accesibility.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility.css")){
            document.cookie = "tema=kmedenjak.css; path=/";
        }else if(kolacic.includes("kmedenjak_dark.css")){
             document.cookie = "tema=kmedenjak_accesibility_dark.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility_dark.css")){
            document.cookie = "tema=kmedenjak_dark.css; path=/";
        }
            location.reload();
    });
</script>

<script>
    $("#ikonaDark").click(function (){
        var kolacic = document.cookie;
        if(kolacic.includes("kmedenjak.css")){
            document.cookie = "tema=kmedenjak_dark.css; path=/";
        }else if(kolacic.includes("kmedenjak_dark.css")){
            document.cookie = "tema=kmedenjak.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility.css")){
            document.cookie = "tema=kmedenjak_accesibility_dark.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility_dark.css")){
            document.cookie = "tema=kmedenjak_accesibility.css; path=/";
        }
            location.reload();
    });
</script>