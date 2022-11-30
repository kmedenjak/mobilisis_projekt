<?php

$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

include 'zaglavlje.php';

//tablicaRezervacija
$veza = new Baza();
$veza->spojiDB();
$id = $_GET["a"];
$upit = "UPDATE rezervacija SET status = 'Odbijeno' WHERE rezervacija_id = '$id'";

$veza->updateDB($upit);
header("Location: rodendan.php");

$veza->zatvoriDB();



