<?php

$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

include 'zaglavlje.php';

//tablicaRezervacija
$veza = new Baza();
$veza->spojiDB();
$id = $_GET["a"];
$upit = "UPDATE rezervacija SET status = 'Potvrđeno' WHERE rezervacija_id = '$id'";

$veza->updateDB($upit);
header("Location: obrasci/kreirajRodendan.php");
setcookie("kreirajRodendan", $_GET['a'], false, '/', false);

$veza->zatvoriDB();
$radnja = "Porveđivanje rezervacije";
$upitDnevnik = "UPDATE rezervacija SET status = Potvrđeno WHERE rezervacija_id = $id";
$tip = 2;
dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['virtualnoVrijeme'], $_COOKIE['idKorisnika'], $tip);
