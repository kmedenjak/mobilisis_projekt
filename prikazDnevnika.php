<?php
ob_start();
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Grupe";
$glavniNaslov = "GRUPE";
$drugiNaslov = "Popis grupa";

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
        $redSortiranja = 'dnevnik_id';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }
    $pojam = $_POST['unosPretrage'];
    $upit = "SELECT k.ime, k.prezime, d.dnevnik_id, d.radnja, d.upit, d.datum_vrijeme, t.naziv_tipa, t.opis_tipa "
            . "FROM korisnik k, dnevnik d, tip t WHERE t.tip_id = d.tip_tip_id AND d.korisnik_korisnik_id = k.korisnik_id "
            . "AND CONCAT(k.ime, k.prezime, d.datum_vrijeme, t.naziv_tipa) LIKE '%" . $pojam . "%'";
    
    
    $rezultat = $veza->selectDB($upit);
    while ($red = mysqli_fetch_array($rezultat)) {
        $redovi[] = $red;
    }if(empty($redovi)){
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
        $redSortiranja = 'dnevnik_id';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }

    $upit1 = "SELECT k.ime, k.prezime, d.dnevnik_id, d.radnja, d.upit, d.datum_vrijeme, t.naziv_tipa, t.opis_tipa "
            . "FROM korisnik k, dnevnik d, tip t WHERE t.tip_id = d.tip_tip_id "
            . "AND d.korisnik_korisnik_id = k.korisnik_id ORDER BY $redSortiranja $sortiranje";
    $rezultat1 = $veza1->selectDB($upit1);
    if ($rezultat1->num_rows > 0) {
        $sortiranje == 'DESC' ? $sortiranje = 'ASC' : $sortiranje = 'DESC';
        while ($red = $rezultat1->fetch_assoc()) {
            $redovi[] = $red;
        }
    }
    $smarty->assign("redovi", $redovi);
    $smarty->assign("sortiranje", $sortiranje);
    $veza1->zatvoriDB();
}
$smarty->assign("greska", $greska);
$smarty->display("prikazDnevnika.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>
