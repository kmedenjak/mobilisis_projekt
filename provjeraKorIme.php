<?php

$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

include './baza.class.php';


if (isset($_POST['korisnickoIme'])) {
    $veza = new Baza();
    $veza->spojiDB();
    $korisnicko_ime = $_POST["korisnickoIme"]; 
    $upit = "SELECT COUNT(*) as zbroj FROM korisnik WHERE korisnicko_ime= '$korisnicko_ime'";

    $rezultat = $veza->selectDB($upit);
    $poruka = "<span style='color: green;'>Korisničko ime je dostupno.</span>";
    if (mysqli_num_rows($rezultat)) {
        $red = mysqli_fetch_array($rezultat);
        $zbroj = $red['zbroj'];

        if ($zbroj > 0) {
            $poruka = "<span style='color: red;'>Korisničko ime nije dostupno.</span>";
        }
    }

    echo $poruka;
    $veza->zatvoriDB();
}
