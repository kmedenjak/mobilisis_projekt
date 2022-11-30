<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Kreiranje rođendana";
$glavniNaslov = "ROĐENDAN";
$drugiNaslov = "Kreiranje rođendana";

include '../zaglavlje.php';
require "$direktorij/dnevnik.php";
$greska = "";

function provjeraNaziv() {
    global $greska;
    if (empty($_POST["nazivRodendana"])) {
        $greska .= "Unesite naziv grupe<br>";
        return false;
    } else {
        return true;
    }
}

function provjeraOpis() {
    global $greska;
    if (empty($_POST["opisRodendana"])) {
        $greska .= "Unesite opis grupe<br>";
        return false;
    } else {
        return true;
    }
}

$ispravno = false;
if (isset($_POST["rodendanDodaj"])) {
    if (provjeraNaziv()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }

    if (provjeraOpis()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }
}

if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] == 2) {
    if ($ispravno) {
        $veza = new Baza();
        $veza->spojiDB();
        $idRezervacije = $_COOKIE['kreirajRodendan'];
        $idKorisnika = $_COOKIE['idKorisnika'];
        $naziv = $_POST["nazivRodendana"];
        $opisRodendana = $_POST["opisRodendana"];
        $upit = "INSERT INTO rodendan (naziv_rodendana, opis_rodendana, zamjenski_termin, korisnik_id, rezervacija_rezervacija_id)"
                . "VALUES ('$naziv', '$opisRodendana', '-', '$idKorisnika', '$idRezervacije')";

        $upitDnevnik = "INSERT INTO rodendan (naziv_rodendana, opis_rodendana, zamjenski_termin, korisnik_id, rezervacija_rezervacija_id)"
                . "VALUES ($naziv, $opisRodendana, -, $idKorisnika, $idRezervacije)";
        $radnja= "Kreiranje novog rođendana";
        $tip = 2;
        dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
        
        $veza->updateDB($upit);
        header("Location: ../popisRodendana.php");
        $veza->zatvoriDB();
    }
}

$smarty->assign("greska", $greska);
$smarty->display("kreirajRodendan.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>