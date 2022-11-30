<?php

$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

include 'zaglavlje.php';

//tablicaRezervacija
$veza = new Baza();
$veza->spojiDB();
$id = $_GET["a"];
$upit = "DELETE rezervacija, sudionici_rodendana FROM rezervacija 
    INNER JOIN sudionici_rodendana WHERE sudionici_rodendana.sudionici_id = rezervacija.sudionici_id and rezervacija.rezervacija_id = '$id'";
echo $upit;
$veza->updateDB($upit);
header("Location: rezervacija.php");
$veza->zatvoriDB();

