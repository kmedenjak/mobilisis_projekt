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


$upitDnevnik = "-";
$radnja = "Stranica grupe";
$tip = 3;
dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);

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
    $pojam = $_POST['unosPretrage'];
    $upit = "SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE '%" . $pojam . "%'";
    
    $radnja = "Pretraživanje tablice grupa";
    $upitDnevnik = "SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE % . $pojam . %";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
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
        $redSortiranja = 'naziv_grupe';
    }

    if (isset($_GET['sortiranje'])) {
        $sortiranje = $_GET['sortiranje'];
    } else {
        $sortiranje = 'ASC';
    }

    $upit1 = "SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY $redSortiranja $sortiranje";
    
    $radnja = "Pregled i sortiranje kolona tablice grupa";
    $upitDnevnik = "SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY $redSortiranja $sortiranje";
    $tip = 2;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
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
$smarty->display("grupa.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>
