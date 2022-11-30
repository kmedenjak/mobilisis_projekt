<?php

$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Galerija";
$glavniNaslov = "GALERIJA";
$drugiNaslov = "Galerija";

include 'zaglavlje.php';


$smarty->assign("prikaz", prikaz());

function prikaz() {
    if (!isset($_SESSION["uloga"])) {
        header("Location: obrasci/prijava.php");
        exit();
    }
}

$smarty->display("galerija.tpl");
$smarty->display("podnozje.tpl");
?>