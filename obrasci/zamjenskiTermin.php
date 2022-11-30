<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Zamjenski termin";
$glavniNaslov = "ZAMJENSKI TERMIN";
$drugiNaslov = "Zamjenski termin";

include '../zaglavlje.php';
require "$direktorij/dnevnik.php";
$greska = "";
$datum = "";

function provjeraDatum() {
    global $greska;
    if (empty($_POST['nazivNovi'])) {
        $greska .= "Unesite datum" . "<br>";
    } else {
        $datum = $_POST["nazivNovi"];
        $formatDatuma = DateTime::createFromFormat('d.m.Y. H:i:s', $datum);
        if (!($formatDatuma)) {
            $greska .= "Format datuma je: dd.mm.gggg. hh:mm:ss" . "<br>";
            return false;
        } else {
            return true;
        }
    }
}

$ispravno = false;
if (isset($_POST["terminDodaj"])) {
    if (provjeraDatum()) {
        $ispravno = true;
    } else {
        $ispravno = false;
    }
}


if (isset($_SESSION["uloga"]) && $_SESSION["uloga"] == 2) {
    if (isset($_GET['a'])) {
        setcookie("idRez", $_GET['a']);
        $id = $_GET['a'];
        $baza = new Baza();
        $baza->spojiDB();

        $upit = "SELECT datum FROM rezervacija WHERE rezervacija_id = '$id'";

        $upitDnevnik = "SELECT datum FROM rezervacija WHERE rezervacija_id = $id";
        $radnja = "Prikaz datuma za dodavanje zamjenskog termina";
        $tip = 2;
        dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);

        $rezultat = $baza->selectDB($upit);
        while ($red = mysqli_fetch_array($rezultat)) {
            $datum = $red['datum'];
            $baza->zatvoriDB();
        }
        
    } elseif (isset($_COOKIE['idRez'])) {
        $id = $_COOKIE['idRez'];
    }

    if (isset($_COOKIE['idRez']) && (isset($_POST["terminDodaj"]))) {
        if ($ispravno) {
            $baza = new Baza();
            $baza->spojiDB();
            $zamjenskiTermin = $_POST["nazivNovi"];
            
            $stvarno = strtotime($zamjenskiTermin);
            $vrijemeDatumPomak = $stvarno + (virtualno_vrijeme() *60 *60);
            $vrijemeDatum = date('d.m.Y. H:i:s', $vrijemeDatumPomak);
            
            $upit3 = "UPDATE rodendan SET zamjenski_termin = '$vrijemeDatum' WHERE rezervacija_rezervacija_id = '$id'";
            echo $upit3;
            
            $upitDnevnik = "UPDATE rodendan SET zamjenski_termin = $vrijemeDatum WHERE rezervacija_rezervacija_id = $id";
            $radnja = "Dodavanje zamjenskog termina";
            $tip = 2;
            dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);

            $rezultat3 = $baza->updateDB($upit3);
            header("Location: ../popisRodendana.php");
            $baza->zatvoriDB();

            setcookie("idRez", "", time() - 3600);
        }
    }
}
$smarty->assign("datum", $datum);
$smarty->assign("greska", $greska);
$smarty->display("zamjenskiTermin.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>

