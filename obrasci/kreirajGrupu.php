<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Kreiraj grupu";
$glavniNaslov = "KREIRAJ GRUPU";
$drugiNaslov = "Kreiranje grupe";

include '../zaglavlje.php';
require "$direktorij/dnevnik.php";
$greska = "";

function provjeraNaziv() {
    global $greska;
    if (empty($_POST["nazivDodaj"])) {
        $greska .= "Unesite naziv grupe<br>";
        return false;
    } else {
        return true;
    }
}

function provjeraOpis() {
    global $greska;
    if (empty($_POST["opisDodaj"])) {
        $greska .= "Unesite opis grupe<br>";
        return false;
    } else {
        return true;
    }
}

$ispravno = false;
if (isset($_POST["grupaKreiraj"])) {
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

if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 2) {
    if($ispravno){
    $baza = new Baza();
    $baza->spojiDB();

    $naziv = $_POST["nazivDodaj"];
    $opis = $_POST["opisDodaj"];
    $korisnik = $_COOKIE['idKorisnika'];
            
    $upit = "INSERT INTO grupa (naziv_grupe, opis_grupe, korisnik_korisnik_id) VALUES ('$naziv', '$opis', '$korisnik')";
    
    $upitDnevnik = "INSERT INTO grupa (naziv_grupe, opis_grupe, korisnik_korisnik_id) VALUES ($naziv, $opis, $korisnik)";
    $radnja= "Kreiranje nove grupe";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
    $rezultat = $baza->updateDB($upit);
    header("Location: ../grupa.php");
    $baza->zatvoriDB();
    }
}

$smarty->assign("greska", $greska);
$smarty->display("kreirajGrupu.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>
