<?php
ob_start();
//var_dump($GLOBALS);
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Prikaz rezervacija";
$glavniNaslov = "PRIKAZ REZERVACIJA";
$drugiNaslov = "Prikaz rezervacija";

include 'zaglavlje.php';
require "$direktorij/dnevnik.php";
$greska = "";

if (isset($_GET['id'])) {
    setcookie("grupaId", $_GET['id'], false, '/', false);
    $_COOKIE['grupaId'] = $_GET['id'];
    $grupaId = $_COOKIE['grupaId'];
} elseif ($_COOKIE['grupaId']) {
    $grupaId = $_COOKIE['grupaId'];
}

//pretrazi i filtriraj grupu
if (isset($_POST["pretrazi"])) {
    $veza = new Baza();
    $veza->spojiDB();

    if (isset($_GET['redSortiranja'])) {
        $redSortiranja = $_GET['redSortiranja'];
    } else {
        $redSortiranja = 'naziv_grupe';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }
    global $grupaId;
    $pojam = $_POST['unosPretrage'];
    $upit = "SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe "
            . "FROM rezervacija r, sudionici_rodendana s, grupa g "
            . "WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = '$grupaId' "
            . "AND CONCAT(r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe) LIKE '%" . $pojam . "%'";
    
    $radnja = "Pretraživanje tablice rezervacija";
    $upitDnevnik = "SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g "
            . "WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = $grupaId "
            . "AND CONCAT(r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe) LIKE $pojam ";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
    $rezultat = $veza->selectDB($upit);
    while ($red = mysqli_fetch_array($rezultat)) {
        $redovi[] = $red;
    }
    if (empty($redovi)) {
        $greska .= "Nema podataka vezanih ta traženi pojam";
    } else {
        $smarty->assign("redovi", $redovi);
    }
    $smarty->assign("sortiranje", $sortiranje);
    $veza->zatvoriDB();
} else {
    $veza1 = new Baza();
    $veza1->spojiDB();

    if (isset($_GET['redSortiranja'])) {
        $redSortiranja = $_GET['redSortiranja'];
    } else {
        $redSortiranja = 'status';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }
    global $grupaId;
    $upit1 = "SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe "
            . "FROM rezervacija r, sudionici_rodendana s, grupa g "
            . "WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = '$grupaId' "
            . "ORDER BY $redSortiranja $sortiranje";
    
    $radnja = "Prikaz i sortiranje tablice rođendan";
    $upitDnevnik = "SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe "
            . "FROM rezervacija r, sudionici_rodendana s, grupa g "
            . "WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = $grupaId "
            . "ORDER BY $redSortiranja $sortiranje";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
    $rezultat1 = $veza1->selectDB($upit1);
    if ($rezultat1->num_rows > 0) {
        $sortiranje == 'DESC' ? $sortiranje = 'ASC' : $sortiranje = 'DESC';
        while ($red = $rezultat1->fetch_assoc()) {
            $redovi[] = $red;
        }
    }
    if (empty($redovi)) {
        $greska .= "Nema podataka vezanih ta traženi pojam";
    } else {
        $smarty->assign("redovi", $redovi);
    }
    $smarty->assign("sortiranje", $sortiranje);
    $veza1->zatvoriDB();
}

$smarty->assign("greska", $greska);
$smarty->display("prikazRezervacija.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>


