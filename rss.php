<?php

//var_dump($GLOBALS);
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

require './baza.class.php';



header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>
    <rss version='2.0'>
    <channel name='Grupa-{$_GET["id"]}'>
    <title>RSS - prikaz rođendana za grupu {$_GET["id"]}</title>
    <link>$direktorij/index.php</link>
    <description>Zadnjih deset podataka rođendana grupe {$_GET["id"]}</description>
    <language>hr</language>";
    

    
$baza = new Baza();
$baza->spojiDB();

$upit = "SELECT * FROM rezervacija r, rodendan ro, grupa g "
        . "WHERE ro.rezervacija_rezervacija_id = r.rezervacija_id AND r.grupa_grupa_id = g.grupa_id AND grupa_id = '{$_GET["id"]}' "
        . "ORDER BY rodendan_id DESC LIMIT 10";
$rezultat = $baza->selectDB($upit);


while ($red = mysqli_fetch_array($rezultat)) {
    echo "<item>
        <rodendan_id> $red[0]</rodendan_id>
        <naziv_rodendana>$red[1]</naziv_rodendana>
        <opis_rodendana>$red[2]</opis_rodendana>
        <zamjenski_termin> $red[3]</zamjenski_termin>
        <korisnik_id>$red[4]</korisnik_id>
        <rezervacija_rezervacija_id>$red[5]</rezervacija_rezervacija_id>
    </item>";
}


echo "</channel></rss>";

$baza->zatvoriDB();



