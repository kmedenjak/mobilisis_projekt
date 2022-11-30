<?php
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Test brzine";
$glavniNaslov = "TEST BRZINE";
$drugiNaslov = "Prikat testa brzine";

include 'zaglavlje.php';

$smarty->display("podnozje.tpl");

