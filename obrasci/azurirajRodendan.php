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

$naziv = "";
$opis = "";
$greska = "";


function provjeraNaziv() {
    global $greska;
    if (empty($_POST["nazivRodendana"])) {
        $greska .= "Upišite naziv <br>";
        return false;
    } else {
        return true;
    }
}

function provjeraOpis() {
    global $greska;
    if (empty($_POST["opisRodendana"])) {
        $greska .= "Upišite opis rođendana<br>";
        return false;
    } else {
        return true;
    }
}

$ispravno = false;
if (isset($_POST["rodendanAzuriraj"])) {

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


if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] === '2') {
    if (isset($_GET['id'])) {
        setcookie("idRodendana", $_GET['id']);
        $idRodendana = $_GET['id'];
        $baza = new Baza();
        $baza->spojiDB();

        $upit = "SELECT naziv_rodendana, opis_rodendana FROM rodendan WHERE rodendan_id = '$idRodendana'";

            $upitDnevnik = "SELECT naziv_rodendana, opis_rodendana FROM rodendan WHERE rodendan_id = $idRodendana";
            $radnja = "Prikaz rodendana za ažuriranje";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
        
        $rezultat = $baza->selectDB($upit);
        while ($red = mysqli_fetch_array($rezultat)) {
            $naziv = $red['naziv_rodendana'];
            $opis = $red['opis_rodendana'];
            $baza->zatvoriDB();
        }
    } elseif (isset($_COOKIE['idRodendana'])) {
        $idGrupe = $_COOKIE['idRodendana'];
    }

    if (isset($_COOKIE['idRodendana']) && (isset($_POST["rodendanAzuriraj"]))) {
        if ($ispravno) {
            $baza = new Baza();
            $baza->spojiDB();

            $naziv = $_POST["nazivRodendana"];
            $opis = $_POST["opisRodendana"];

            $upit = "UPDATE rodendan SET naziv_rodendana = '$naziv', opis_rodendana = '$opis' WHERE rodendan_id = '{$_COOKIE['idRodendana']}'";
            echo $upit;
            $upitDnevnik = "UPDATE rodendan SET naziv_rodendana = $naziv, opis_rodendana = $opis WHERE rodendan_id = {$_COOKIE['idRodendana']}";
            $radnja = "Ažuriranje rođendana";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
            
            $baza->updateDB($upit);
            header("Location: ../popisRodendana.php");
            $baza->zatvoriDB();
        }
    }
}

$smarty->assign("greska", $greska);
$smarty->assign("naziv", $naziv);
$smarty->assign("opis", $opis);
$smarty->display("azurirajRodendan.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>


