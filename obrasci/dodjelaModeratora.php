<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Dodjela moderatora";
$glavniNaslov = "GRUPA";
$drugiNaslov = "Dodjela moderatora";

include '../zaglavlje.php';
require "$direktorij/dnevnik.php";
$greska = "";

function provjeraDodjela() {
    global $greska;
    if (empty($_POST["opisDodjele"])) {
        $greska .= "Unesite naziv grupe<br>";
        return false;
    } else {
        return true;
    }
}

function provjeraGrupa() {
    global $greska;
    if (empty($_POST["grupa"])) {
        $greska .= "Odaberite grupu<br>";
        return false;
    } else {
        return true;
    }
}

function provjeraModerator() {
    global $greska;
    if (empty($_POST["moderator"])) {
        $greska .= "Odaberite moderatora<br>";
        return false;
    } else {
        return true;
    }
}

$ispravno = false;
if (isset($_POST["moderatorDodaj"])) {
    if (provjeraDodjela()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }

    if (provjeraGrupa()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }

    if (provjeraModerator()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }
}

if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 2) {
    $baza = new Baza();
    $baza->spojiDB();

    $upit = "SELECT grupa_id, naziv_grupe FROM grupa WHERE grupa_id NOT IN (SELECT grupa_grupa_id FROM dodjela_moderatora)";
    $rezultat = $baza->selectDB($upit);
    while ($red = mysqli_fetch_array($rezultat)) {
        $redovi[] = $red;
    }
    $baza->zatvoriDB();
}

if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 2) {
    $baza = new Baza();
    $baza->spojiDB();

    $upit = "SELECT korisnik_id, prezime FROM korisnik WHERE uloga_id = '2'";
    $rezultat = $baza->selectDB($upit);
    while ($red = mysqli_fetch_array($rezultat)) {
        $redovi[] = $red;
    }
    $baza->zatvoriDB();
}

if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 2) {
    if ($ispravno) {
        $baza = new Baza();
        $baza->spojiDB();

        $dodjela = $_POST["opisDodjele"];
        $grupa = $_POST["grupa"];
        $moderator = $_POST["moderator"];
        
        $upit = "INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES ('$dodjela', '$moderator', '$grupa')";
        
        $upitDnevnik = "INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES ($dodjela, $moderator, $grupa)";
        $radnja = "Dodjeljivanje moderatora";
        $tip = 2;
        dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
        
        $rezultat = $baza->selectDB($upit);
        header("Location: ../grupa.php");
        $baza->zatvoriDB();
    }
}

$smarty->assign("greska", $greska);
$smarty->assign("redovi", $redovi);
$smarty->display("dodjelaModeratora.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>
