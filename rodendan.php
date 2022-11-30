<?php
ob_start();
//var_dump($GLOBALS);
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Rođendan";
$glavniNaslov = "ROĐENDAN";
$drugiNaslov = "Rođendan";

include 'zaglavlje.php';
require "$direktorij/dnevnik.php";
$greska = "";

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
    $korisnikId = $_COOKIE['idKorisnika'];
    $pojam = $_POST['unosPretrage'];
    if($_SESSION["uloga"] === '1'){
        $upit = "SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa "
            . "CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE '%" . $pojam . "%'";
    }else{
        $upit = "SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k "
            . "WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = '$korisnikId' "
            . "AND CONCAT(g.grupa_id, g.naziv_grupe, g.opis_grupe) LIKE '%" . $pojam . "%'";
    }
    
    $radnja = "Pretraživanje tablice rođendan";
    $upitDnevnik = "SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k "
            . "WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = $korisnikId "
            . "AND CONCAT(g.grupa_id, g.naziv_grupe, g.opis_grupe) LIKE $pojam ";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
    $rezultat = $veza->selectDB($upit);
    while ($red = mysqli_fetch_array($rezultat)) {
        $redovi[] = $red;
    }
    if(empty($redovi)){
        $greska .= "Nema podataka vezanih ta treženi pojam";
    }else{
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
        $redSortiranja = 'naziv_grupe';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }
    $korisnikId = $_COOKIE['idKorisnika'];
    if($_SESSION["uloga"] === '1'){
        $upit1 = "SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa "
            . "ORDER BY $redSortiranja $sortiranje";
    }else{
        $upit1 = "SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k "
            . "WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = '$korisnikId' "
            . "ORDER BY $redSortiranja $sortiranje";
    }
    
    
    $radnja = "Prikaz i sortiranje tablice rođendan";
    $upitDnevnik = "SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k "
            . "WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = $korisnikId "
            . "ORDER BY $redSortiranja $sortiranje";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
    $rezultat1 = $veza1->selectDB($upit1);
    if ($rezultat1->num_rows > 0) {
        $sortiranje == 'DESC' ? $sortiranje = 'ASC' : $sortiranje = 'DESC';
        while ($red = $rezultat1->fetch_assoc()) {
            $redovi[] = $red;
        }
    }if (empty($redovi)) {
        $greska .= "Nema podataka vezanih za traženi pojam";
    } else {
        $smarty->assign("redovi", $redovi);
    }
    $smarty->assign("sortiranje", $sortiranje);
    $veza1->zatvoriDB();
}

$smarty->assign("greska", $greska);
$smarty->display("rodendan.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>


