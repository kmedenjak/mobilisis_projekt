<?php

ob_start();
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Dokumentacija";
$glavniNaslov = "DOKUMENTACIJA";
$drugiNaslov = "Opis projektnog zadatka:";

include 'zaglavlje.php';

$smarty->display("dokumentacija.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>

