<?php

ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());

$naslov = "Prijava";
$glavniNaslov = "PRIJAVA";
$drugiNaslov = "Prijava";
include '../zaglavlje.php';
require "../dnevnik.php";
$greska = "";
$poruka = "";
$korisnik = "";


if ($_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

if (isset($_POST['submit'])) {
    //var_dump($_GET);
    $greska = "";
    $poruka = "";
    foreach ($_POST as $k => $v) {
        if (empty($v)) {
            $greska .= "Nije popunjeno: " . $k . "<br>";
        } elseif ($k === "lozinka") {
            $uzorak = '/^(?!.*(.)\1{3})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{8,20}$/';
            if (!preg_match($uzorak, $v)) {
                $greska .= "Format: Lozinka ima manje od 8 znakova "
                        . "ili više od 20 znakova "
                        . "ili nema 1 alfanumerički znak "
                        . "ili nema najmanje 1 broj "
                        . "ili nema specijalni znak "
                        . "ili se ponavljaju 3 ista znaka!"
                        . "<br>";
            }
        }
    }
    if (empty($greska)) {
        //$poruka = 'Nema greške!';
        $veza = new Baza();
        $veza->spojiDB();
        $korisnickoIme = $_POST['korisnickoIme'];
        $lozinka = $_POST['lozinka'];

        $upit = "SELECT *FROM korisnik WHERE "
                . "korisnicko_ime = '$korisnickoIme' AND "
                . "lozinka = '$lozinka'";
        $rezultat = $veza->selectDB($upit);
        echo $upit;
        $autenticiran = false;
        $pogresanUnos = false;
        while ($red = mysqli_fetch_array($rezultat)) {
            if ($red) {
                if ($red["broj_neuspjesnih_prijava"] < 3) {
                    $autenticiran = true;
                    $uloga = $red["uloga_id"];
                    $idKorisnika = $red["korisnik_id"];
                    $korisnickoIme = $red["korisnicko_ime"];
                } else {
                    $pogresanUnos = true;
                }
            }
        }

        if ($autenticiran) {
            $poruka = 'Uspješna prijava!';
            setcookie("idKorisnika", $idKorisnika, false, '/', false);
            Sesija::kreirajKorisnika($korisnickoIme, $uloga);
            echo $korisnickoIme;
            $upit = "UPDATE korisnik SET broj_neuspjesnih_prijava= 0 WHERE korisnicko_ime = '{$korisnickoIme}'";
            $rezultat = $veza->updateDB($upit);
            header("Location: ../galerija.php");
        } elseif (!$pogresanUnos) {
            $poruka = "Pogrešna lozinka";
            $upit = "UPDATE korisnik SET broj_neuspjesnih_prijava = broj_neuspjesnih_prijava+1 WHERE korisnicko_ime = '{$korisnickoIme}'";
            echo $upit;
            $rezultat = $veza->updateDB($upit);
        } else {
            $poruka = "Korisnički račun je zaključan";
        }
        echo $korisnickoIme;
        if (!empty($_POST["zapamti"])) {
            echo "nekaj";
            setcookie("prijavljeni_korisnik", $korisnickoIme);
        } else {
            setcookie("prijavljeni_korisnik", "", time() - 3600);
        }

        $veza->zatvoriDB();
    }
}

if (isset($_COOKIE['prijavljeni_korisnik'])) {
    $korisnik = $_COOKIE['prijavljeni_korisnik'];
}

$smarty->assign("korisnik", $korisnik);
$smarty->assign("greska", $greska);
$smarty->assign("poruka", $poruka);
$smarty->display('prijava.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>