<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Kreiraj rezervaciju";
$glavniNaslov = "KREIRAJ REZERVACIJU";
$drugiNaslov = "Kreiraj rezervaciju";

include '../zaglavlje.php';
require "$direktorij/dnevnik.php";
$greska = "";

function provjeraBrojDjece() {
    global $greska;
    if (empty($brojDjece = $_POST["brojDjece"])) {
        $greska .= "Unesite broj djece <br>";
        return false;
    } else {
        $datum = $_POST["brojDjece"];
        if (!(is_numeric($brojDjece))) {
            $greska .= "Broj djece mora biti broj <br>";
            return true;
        } else {
            return false;
        }
    }
}

function provjeraDatuma() {
    global $greska;
    if (empty($datum = $_POST["datumRezervacije"])) {
        $greska .= "Unesite datum" . "<br>";
    } else {
        $datum = $_POST["datumRezervacije"];
        $formatDatuma = DateTime::createFromFormat('d.m.Y. H:i:s', $datum);
        if (!($formatDatuma)) {
            $greska .= "Format datuma je: dd.mm.gggg. hh:mm:ss" . "<br>";
            return false;
        } else {
            return true;
        }
    }
}

function provjeraGrupe() {
    global $greska;
    if (empty($_POST["grupa"])) {
        $greska .= "Odaberite grupu<br>";
        return false;
    } else {
        return true;
    }
}

function provjeraSudionika() {
    global $greska;
    if (empty($_POST["imePrezime"])) {
        $greska .= "Upišite sudionike rođendana<br>";
        return false;
    } else {
        return true;
    }
}

$ispravno = false;
if (isset($_POST["rezervacijaDodaj"])) {

    if (provjeraBrojDjece()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }

    if (provjeraDatuma()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }

    if (provjeraGrupe()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }
}

$ispravnoSudionici = false;
if (isset($_POST["sudioniciDodaj"])) {
    if (provjeraSudionika()) {
        $ispravnoSudionici = true;
    } else {
        $ispravnoSudionici = false;
    }
}

if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < '4') {
    $baza = new Baza();
    $baza->spojiDB();

    $upit = "SELECT grupa_id, naziv_grupe FROM grupa";
    $rezultat = $baza->selectDB($upit);
    while ($red = mysqli_fetch_array($rezultat)) {
        $redovi[] = $red;
    }
    $baza->zatvoriDB();
}


if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] <= '3') {
    if ($ispravnoSudionici) {
        $baza = new Baza();
        $baza->spojiDB();
        $imePrezime = $_POST["imePrezime"];
        $upit = "INSERT INTO sudionici_rodendana (ImePrezime, korisnik_id) VALUES ('$imePrezime', '{$_COOKIE['idKorisnika']}')";

        $baza->updateDB($upit);
        $zadnjiId = "SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = '{$_COOKIE['idKorisnika']}' ORDER BY sudionici_id DESC LIMIT 1";

        $upitDnevnik = "SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = {$_COOKIE['idKorisnika']} ORDER BY sudionici_id DESC LIMIT 1";
        $radnja= "Unos sudionika rođendana";
        $tip = 2;
        dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
        
        $rezultat = $baza->selectDB($zadnjiId);
        while ($red = mysqli_fetch_array($rezultat)) {
            if ($red) {
                $zapisZadnjiId = $red["sudionici_id"];
            }
        }
        setcookie("zadnjiId", $zapisZadnjiId);
        $baza->zatvoriDB();
    }
    if ($ispravno && isset($_COOKIE["zadnjiId"])) {
        $baza = new Baza();
        $baza->spojiDB();
        $grupa = $_POST["grupa"];
        
        $datumRezervacije = $_POST["datumRezervacije"];
        $stvarno = strtotime($datumRezervacije);
        $vrijemeDatumPomak = $stvarno + (virtualno_vrijeme() *60 *60);
        $vrijemeDatumRezervacije = date('Y-m-d H:i:s', $vrijemeDatumPomak);
        
        $brojDjece = $_POST["brojDjece"];
        $dohvatZadnjegIdSudionika = "SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = '{$_COOKIE['idKorisnika']}' ORDER BY sudionici_id DESC LIMIT 1";

        $upitDnevnik = "SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = {$_COOKIE['idKorisnika']} ORDER BY sudionici_id DESC LIMIT 1";
        $radnja= "Dohvaćanje sudionika rođendana";
        $tip = 2;
        dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
        
        $rezultat = $baza->selectDB($dohvatZadnjegIdSudionika);
        while ($red = mysqli_fetch_array($rezultat)) {
            if ($red) {
                $sudionikId = $red["sudionici_id"];
            }
        }


        $upit = "INSERT INTO rezervacija (broj_djece, datum, status, potvrdena, sudionici_id, korisnik_korisnik_id, grupa_grupa_id)"
                . " VALUES ('$brojDjece', '$vrijemeDatumRezervacije', 'U tijeku', '0', '$sudionikId', '{$_COOKIE['idKorisnika']}', '$grupa')";

        
        $upitDnevnik2 = "INSERT INTO rezervacija (broj_djece, datum, status, potvrdena, sudionici_id, korisnik_korisnik_id, grupa_grupa_id)"
                . " VALUES ($brojDjece, $vrijemeDatumRezervacije, U tijeku, 0, $sudionikId, {$_COOKIE['idKorisnika']}, $grupa)";
        $radnja2 = "Kreiranje nove rezervacije";
        $tip2 = 2;
        dnevnik_zapis($radnja2, $upitDnevnik2, $_COOKIE['idKorisnika'], $tip2);
        
        $baza->updateDB($upit);
        $baza->zatvoriDB();
        setcookie("zadnjiId", "", time() - 3600);
    } elseif (!isset($_COOKIE["zadnjiId"])) {
        global $greska;
        $greska .= "Prvo morate unijeti sudionike";
    }
}

$smarty->assign("redovi", $redovi);
$smarty->assign("greska", $greska);
$smarty->display("kreirajRezervaciju.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>