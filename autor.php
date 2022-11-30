<?php
ob_start();
//var_dump($GLOBALS);
$putanja = dirname($_SERVER["REQUEST_URI"]);
$direktorij = getcwd();

$naslov = "Autor";
$glavniNaslov = "AUTOR";
$drugiNaslov = "Autor";

include 'zaglavlje.php';

$smarty->assign("prikaz", prikaz());

function prikaz() {
    if (!isset($_SESSION["uloga"])) {
        header("Location: obrasci/prijava.php");
        exit();
    }
}

$smarty->display("autor.tpl");
$smarty->display("podnozje.tpl");
ob_end_flush();
?>



