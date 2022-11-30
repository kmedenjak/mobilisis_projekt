<?php

ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Grupa";
$glavniNaslov = "GRUPA";
$drugiNaslov = "Ažuriranje grupe";

include '../zaglavlje.php';
require "$direktorij/dnevnik.php";

$grupaID = "";
$naziv = "";
$opis = "";
$moderator = "";
$greska = "";

function provjeraNaziv() {
    global $greska;
    if (empty($_POST["nazivGrupe"])) {
        $greska .= "Unesite naziv grupe<br>";
        return false;
    } else {
        return true;
    }
}

function provjeraOpis() {
    global $greska;
    if (empty($_POST["opisGrupe"])) {
        $greska .= "Unesite opis grupe<br>";
        return false;
    } else {
        return true;
    }
}

$ispravno = false;
if (isset($_POST["grupaAzuriraj"])) {
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
    if (isset($_GET['id'])) {
        setcookie("idGrupe", $_GET['id']);
        $idGrupe = $_GET['id'];
        $baza = new Baza();
        $baza->spojiDB();

        $upit = "SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k "
                . "WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = '2' AND g.grupa_id = '$idGrupe'";

        $upitDnevnik = "SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k "
                . "WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = $idGrupe";
        $radnja = "Prikaz grupa za ažuriranje";
        $tip = 2;
        dnevnik_zapis($radnja, $upitDnevnik,$_COOKIE['idKorisnika'], $tip);

        $rezultat = $baza->selectDB($upit);
        while ($red = mysqli_fetch_array($rezultat)) {
            $naziv = $red['naziv_grupe'];
            $opis = $red['opis_grupe'];
            $moderator = $red['prezime'];
            $baza->zatvoriDB();
        }
    } elseif (isset($_COOKIE['idGrupe'])) {
        $idGrupe = $_COOKIE['idGrupe'];
    }

    if (isset($_COOKIE['idGrupe']) && (isset($_POST["grupaAzuriraj"]))) {
        if ($ispravno) {
            $baza = new Baza();
            $baza->spojiDB();
            $naziv = $_POST["nazivGrupe"];
            $opis = $_POST["opisGrupe"];

            $upit3 = "UPDATE grupa SET naziv_grupe = '$naziv', opis_grupe = '$opis' WHERE grupa_id = '$idGrupe'";
            
            $upitDnevnik = "UPDATE grupa SET naziv_grupe = $naziv, opis_grupe = $opis WHERE grupa_id = $idGrupe";
            $radnja = "Ažuriranje grupe";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['virtualnoVrijeme'], $_COOKIE['idKorisnika'], $tip);

            $rezultat3 = $baza->updateDB($upit3);
            header("Location: ../index.php");
            echo $rezultat3;
            $baza->zatvoriDB();

            setcookie("idGrupe", "", time() - 3600);
        }
    }
}

$smarty->assign("greska", $greska);
$smarty->assign("grupaID", $grupaID);
$smarty->assign("naziv", $naziv);
$smarty->assign("opis", $opis);
$smarty->assign("moderator", $moderator);
$smarty->display("azurirajGrupu.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>

