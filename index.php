<?php

ob_start();
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Početna stranica";
$glavniNaslov = "ROĐENDAN";
$drugiNaslov = "Početna stranica";

include 'zaglavlje.php';
if (!strpos($_SERVER["REQUEST_URI"], 'index.php') !== false) {
    header("Location: index.php");
    exit();
}

$statistikaNaslov = "Statistika";
$rssNaslov = "RSS";
$pomak = "Pomak vremena";

$greska = "";
$broj = "";
if (isset($_POST["postaviVrijeme"])) {
    $url = "http://barka.foi.hr/WebDiP/pomak_vremena/pomak.php?format=xml";

    if (!($fp = fopen($url, 'r'))) {
        echo "Problem: nije moguće otvoriti url: " . $url;
        exit;
    }

    $string = fread($fp, 10000);
    fclose($fp);
    $domdoc = new DOMDocument;
    $domdoc->loadXML($string);

    $params = $domdoc->getElementsByTagName('brojSati');
    $sati = 0;
    if ($params != NULL) {
        $sati = $params->item(0)->nodeValue;
    }
    $xml = new SimpleXMLElement('<xml/>');
    $elem = $xml->addChild('konfiguracija');
    $elem->addChild('pomak', $sati)->addAttribute("naziv", "vrijednost");

    $string = $xml->asXML();
    $vrijeme_servera = time();
    $vrijeme_sustava = $vrijeme_servera + ($sati * 60 * 60);
    $virtualnoVrijeme = "Virtualno vrijeme sustava: " . $vrijeme_sustava . "<br>";

    $fp = fopen("$direktorij/xml/konfiguracija.xml", "w");
    fwrite($fp, $string);
    fclose($fp);

    $vrijeme_servera = time();
    $vrijemeStvarno = date('d.m.Y H:i:s', $vrijeme_servera);
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
    $pojam = $_POST['unosPretrage'];
    $upit = "SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE '%" . $pojam . "%'";
    $rezultat = $veza->selectDB($upit);
    while ($red1 = mysqli_fetch_array($rezultat)) {
        $redovi1[] = $red1;
    }if (empty($redovi1)) {
        $greska .= "Nema podataka vezanih ta treženi pojam";
    } else {
        $smarty->assign("redovi1", $redovi1);
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
    $rezultat1 = $veza1->selectDB($upit1);
    if ($rezultat1->num_rows > 0) {
        $sortiranje == 'DESC' ? $sortiranje = 'ASC' : $sortiranje = 'DESC';
        while ($red1 = $rezultat1->fetch_assoc()) {
            $redovi1[] = $red1;
        }
    }
    $smarty->assign("redovi1", $redovi1);
    $smarty->assign("sortiranje", $sortiranje);
    $veza1->zatvoriDB();
}


//TablicaKorisnik
$veza = new Baza();
$veza->spojiDB();
$upit = "SELECT ro.rodendan_id, ro.naziv_rodendana, s.ImePrezime FROM rodendan ro, rezervacija r, sudionici_rodendana s "
        . "WHERE r.sudionici_id = s.sudionici_id AND r.rezervacija_id = ro.rezervacija_rezervacija_id";
$rezultat = $veza->selectDB($upit);

while ($red = mysqli_fetch_array($rezultat)) {
    $redovi[] = $red;
}

$smarty->assign("redovi", $redovi);
$veza->zatvoriDB();


//upitStatistika
$veza = new Baza();
$veza->spojiDB();

$upitStatistika = "SELECT  grupa.naziv_grupe, COUNT(rodendan.rodendan_id) AS brojRodendana FROM grupa LEFT JOIN rezervacija ON rezervacija.grupa_grupa_id = grupa.grupa_id "
        . "LEFT JOIN rodendan ON rodendan.rezervacija_rezervacija_id = rezervacija.rezervacija_id GROUP BY grupa.naziv_grupe";
$rezultat1 = $veza->selectDB($upitStatistika);

while ($red2 = mysqli_fetch_array($rezultat1)) {
    $redovi2[] = $red2;
}

$smarty->assign("redovi2", $redovi2);
$veza->zatvoriDB();


$smarty->assign("broj", $broj);
$smarty->assign("greska", $greska);
$smarty->assign("rssNaslov", $rssNaslov);
$smarty->assign("pomak", $pomak);
$smarty->assign("statistikaNaslov", $statistikaNaslov);
$smarty->display("index.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>

