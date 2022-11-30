<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
//var_dump($putanja);
$direktorij = dirname(getcwd());

$naslov = "Registracija";
$glavniNaslov = "REGISTRACIJA";
$drugiNaslov = "Registracija";

include '../zaglavlje.php';
include "../dnevnik.php";
$greska = "";


function provjeraIme()
{
    global $greska;
    if(empty($_POST['ime'])){
        $greska .= "Ime nije uneseno<br>";
    }else{
        $ime = $_POST["ime"];
        if(!(ctype_upper($ime[0]))){
            $greska .= "Prvo slovo imena mora biti veliko početno slovo<br>";
            return false;
        }else{
            return true;
        }
    }
}

function provjeraUnosaKorisnickog() {
    global $greska;
    if (empty($_POST['korisnickoIme'])) {
        $greska .= "Korisnicko ime nije uneseno<br>";
    } else {
        $korisnickoIme = $_POST["korisnickoIme"];
        if (strlen($korisnickoIme) < 5) {
            $greska .= "Korisničko ime mora imati više od pet znakova<br>";
            return false;
        } else {
            return true;
        }
    }
}

function provjeraUnosaEmail() {
    global $greska;
    if (empty($_POST['eMail'])) {
        $greska .= "Email nije unesen<br>";
    } else {
        $email = $_POST["eMail"];
        $uzorak = '/^[a-zA-Z0-9.*]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/';
        if (!preg_match($uzorak, $email)) {
            $greska .= "Format emaila nije ispravan<br>";
            return false;
        } else {
            return true;
        }
    }
}

function provjeraMjesta() {
    global $greska;
    if ($_POST['mjesto'] === "") {
        $greska .= "Niste odabrali mjesto stanovanja" . "<br>";
        return false;
    }else {
        return true;
    }
}

function provjeraUnosaDatum() {
    global $greska;
    if (empty($_POST['datum'])) {
        $greska .= "Unesite datum" . "<br>";
    } else {
        $datum = $_POST["datum"];
        $formatDatuma = DateTime::createFromFormat('d.m.Y. H:i:s', $datum);
        if (!($formatDatuma)) {
            $greska .= "Format datuma je: dd.mm.gggg. hh:mm:ss" . "<br>";
            return false;
        } else {
            return true;
        }
    }
}

function provjeraAdresa() {
    global $greska;
    if (empty($_POST['adresa'])) {
        $greska .= "Unesite adresu<br>";
        return false;
    }else{
        return true;
    }
}

function provjeraLozinka() {
    global $greska;
    if ($_POST["lozinka"] === "" || $_POST["potvrdaLozinke"] === "") {
        $greska .= "Lozinka i potvrda lozinke nisu unesene<br>";
        return false;
    }
    if ($_POST["lozinka"] !== $_POST["potvrdaLozinke"]) {
        $greska .= "Lozinka i potvrda lozinke nisu iste<br>";
        return false;
    } else {
        return true;
    }
}

function provjeraUvjeta(){
    global $greska;
    if(empty($_POST["uvjet"])){
        $greska .= "Morate prihavtiti uvjete korištenja<br>";
        return false;
    }else{
        return true;
    }
}

$ispravno = false;
if (isset($_POST['obrazacRegistracija'])) {
    if(provjeraAdresa() && provjeraIme() && provjeraLozinka() && provjeraMjesta() && provjeraUnosaDatum() && provjeraUnosaEmail() && provjeraUnosaKorisnickog() && provjeraUvjeta()){
        $ispravno = true;
    }else{
        $ispravno = false;
    }

}

if (isset($_POST["obrazacRegistracija"])) {
    if ($ispravno) {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $korisnickoIme = $_POST['korisnickoIme'];
        $godina = $_POST['godina'];
        $mjesto = $_POST['mjesto'];
        $adresa = $_POST['adresa'];
        $postanskiBroj = $_POST['postanskiBroj'];
        $spol = $_POST['spol'];
        $telefonskiBroj = $_POST['kontakt'];
        $email = $_POST['eMail'];
        $lozinka = $_POST['lozinka'];
        $salt = sha1(time());
        $kriptirano = hash("sha256", $salt . "--" . $lozinka);
        $uvjeti = date("Y-m-d h:i:sa");
        
        $datum = $_POST['datum'];
        $stvarno = strtotime($datum);
        $vrijemeDatumPomak = $stvarno + (virtualno_vrijeme() *60 *60);
        $vrijemeDatum = date('d.m.Y. H:i:s', $vrijemeDatumPomak);
        
        $baza = new Baza();
        $baza->spojiDB();

        $upit = "INSERT INTO korisnik (ime, prezime, korisnicko_ime, godina_rodenja, mjesto, adresa, postanski_broj, spol, telefonski_broj, "
                . "lozinka, lozinka_sha256, email, uvjeti, status, datum_registracije, uloga_id)"
                . " VALUES ('$ime', '$prezime', '$korisnickoIme', '$godina', '$mjesto', '$adresa', '$postanskiBroj', '$spol', '$telefonskiBroj',"
                . " '$lozinka', '$kriptirano', '$email', '$uvjeti', '1', '$vrijemeDatum', '3')";
       
        echo $upit;
        $rezultat = $baza->updateDB($upit);

        $upit2 = "SELECT * FROM korisnik WHERE korisnicko_ime = '{$korisnickoIme}' AND lozinka = '{$lozinka}'";
        $rezultat2 = $baza->selectDB($upit2);

        $autenticiran = false;
        while ($red = mysqli_fetch_array($rezultat2)) {
            if ($red) {
                $autenticiran = true;
                $uloga = $red["uloga_id"];
            }
        }
        if ($autenticiran) {
            Sesija::kreirajKorisnika($korisnickoIme, $uloga);
            header("Location: ../galerija.php");
            //exit();
        }

        $baza->zatvoriDB();
    }
}

$smarty->assign("greska", $greska);
$smarty->display("registracija.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>



