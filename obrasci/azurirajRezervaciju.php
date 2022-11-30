<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Rezervacija";
$glavniNaslov = "REZERVACIJA";
$drugiNaslov = "Ažuriranje rezervacije";

include '../zaglavlje.php';
require "$direktorij/dnevnik.php";
$grupaID = "";
$datum = "";
$broj_djece = "";
$naziv = "";
$sudionici = "";
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
        $formatDatuma = DateTime::createFromFormat('d.m.Y.', $datum);
        if (!($formatDatuma)) {
            $greska .= "Format datuma je: dd.mm.gggg." . "<br>";
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
if (isset($_POST["rezervacijaAzuriraj"])) {

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

if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] <= '3') {
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
    if (isset($_GET['id'])) {
        setcookie("idRezervacije", $_GET['id']);
        $idRezervacije = $_GET['id'];
        $baza = new Baza();
        $baza->spojiDB();

        $upit = "SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s "
                . "WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = '$idRezervacije'";

            $upitDnevnik = "SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s "
                . "WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = $idRezervacije";
            $radnja = "Prikaz rezervacije za ažuriranje";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
        
        $rezultat = $baza->selectDB($upit);
        while ($red = mysqli_fetch_array($rezultat)) {
            $naziv = $red['naziv_grupe'];
            $datum = $red['datum'];
            $broj_djece = $red['broj_djece'];
            $sudionici = $red['ImePrezime'];
            $idSudionika = $red['sudionici_id'];
            $baza->zatvoriDB();
        }
        setcookie("sudionik", $idSudionika);
    } elseif (isset($_COOKIE['idRezervacije'])) {
        $idGrupe = $_COOKIE['idRezervacije'];
    }

    if (isset($_COOKIE['idRezervacije']) && (isset($_POST["sudioniciDodaj"]))) {
        if ($ispravnoSudionici) {
            $baza = new Baza();
            $baza->spojiDB();
            $imePrezime = $_POST["imePrezime"];
            $upit = "UPDATE sudionici_rodendana SET ImePrezime = '$imePrezime' WHERE sudionici_id = '{$_COOKIE["sudionik"]}'";
            
            $upitDnevnik = "UPDATE sudionici_rodendana SET ImePrezime = $imePrezime WHERE sudionici_id = {$_COOKIE['sudionik']}";
            $radnja = "Ažuriranje sudionika rođendana";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
            
            $rezultat = $baza->updateDB($upit);
            $upit = "SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s "
                    . "WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = '$idGrupe'";

            $upitDnevnik = "SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s "
                    . "WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = $idGrupe";
            $radnja = "Prikaz rezervacije";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
            
            $rezultat = $baza->selectDB($upit);
            while ($red = mysqli_fetch_array($rezultat)) {
                $naziv = $red['naziv_grupe'];
                $datum = $red['datum'];
                $broj_djece = $red['broj_djece'];
                $sudionici = $red['ImePrezime'];
                $idSudionika = $red['sudionici_id'];
            }
            $baza->zatvoriDB();
        }
    }
    if (isset($_COOKIE['idRezervacije']) && (isset($_POST["rezervacijaAzuriraj"]))) {
        if ($ispravno) {
            $baza = new Baza();
            $baza->spojiDB();

            $grupa = $_POST["grupa"];
            $datumRezervacije = $_POST["datumRezervacije"];
            
            $stvarno = strtotime($datumRezervacije);
            $vrijemeDatumPomak = $stvarno + (virtualno_vrijeme() *60 *60);
            $vrijemeDatum = date('d.m.Y. H:i:s', $vrijemeDatumPomak);
            
            $brojDjece = $_POST["brojDjece"];

            $upit = "UPDATE rezervacija SET grupa_grupa_id = '$grupa', broj_djece = '$brojDjece', datum = '$vrijemeDatum' WHERE rezervacija_id = '{$_COOKIE['idRezervacije']}'";

            $upitDnevnik = "UPDATE rezervacija SET grupa_grupa_id = $grupa, broj_djece = $brojDjece, datum = $vrijemeDatum WHERE rezervacija_id = {$_COOKIE[idRezervacije]}";
            $radnja = "Ažuriranje rezervacije";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
            
            $baza->updateDB($upit);
            header("Location: ../rezervacija.php");
            $baza->zatvoriDB();
        }
    }
}

$smarty->assign("redovi", $redovi);
$smarty->assign("greska", $greska);
$smarty->assign("naziv", $naziv);
$smarty->assign("datum", $datum);
$smarty->assign("broj_djece", $broj_djece);
$smarty->assign("sudionici", $sudionici);
$smarty->display("azurirajRezervaciju.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>


