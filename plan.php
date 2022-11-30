<?php
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Plan";
$glavniNaslov = "PLAN";
$drugiNaslov = "Prikaz plana";

include 'zaglavlje.php';

$url = "urls.txt";

$smarty->assign("url", $url);
$smarty->display("plan.tpl");
$smarty->display("podnozje.tpl");

