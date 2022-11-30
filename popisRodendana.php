<?php
ob_start();
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Rođendan";
$glavniNaslov = "ROĐENDAN";
$drugiNaslov = "Popis rođendana";

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
        $redSortiranja = 'rodendan_id';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }
    $pojam = $_POST['unosPretrage'];
    if($_SESSION["uloga"] === '1'){
        $upit = "SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime "
            . "FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id "
            . "AND r.rezervacija_rezervacija_id = re.rezervacija_id "
                . "AND CONCAT(r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime) LIKE '%" . $pojam . "%'";
    }else{
        $upit = "SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime "
            . "FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id "
            . "AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = '{$_COOKIE['idKorisnika']}'"
            . "AND CONCAT(r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime) LIKE '%" . $pojam . "%'";
    }

    $radnja = "Pretraživanje tablice rođendan za prijavljenog moderatora";
    $upitDnevnik = "SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime "
            . "FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id "
            . "AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = {$_COOKIE['idKorisnika']} "
            . "AND CONCAT(r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime) LIKE $pojam ";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
    $rezultat = $veza->selectDB($upit);
    while ($red = mysqli_fetch_array($rezultat)) {
        $redovi[] = $red;
    }if(empty($redovi)){
        $greska .= "Nema podataka vezanih za traženi pojam";
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
        $redSortiranja = 'rodendan_id';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }
    if($_SESSION["uloga"] === '1'){
        $upit1 = "SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime "
            . "FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id "
            . "AND r.rezervacija_rezervacija_id = re.rezervacija_id ORDER BY $redSortiranja $sortiranje";
    }else{
        $upit1 = "SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime "
            . "FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id "
            . "AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = '{$_COOKIE['idKorisnika']}' ORDER BY $redSortiranja $sortiranje";
    }

    $radnja = "Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora";
    $upitDnevnik = "SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime "
            . "FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id "
            . "AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = {$_COOKIE['idKorisnika']} ORDER BY $redSortiranja $sortiranje";
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
$smarty->display("popisRodendana.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>
