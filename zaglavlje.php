<?php

require "$direktorij/baza.class.php";
require "$direktorij/sesija.class.php";

require "$direktorij/vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php";

Sesija::kreirajSesiju();
$smarty = new Smarty();

$smarty->setTemplateDir("$direktorij/templates")
        ->setCompileDir("$direktorij/templates_c")
        ->setPluginsDir(SMARTY_PLUGINS_DIR)
        ->setCacheDir("$direktorij/cache")
        ->setConfigDir("$direktorij/configs");

if(!isset($_COOKIE['tema'])){
    setcookie("tema", "kmedenjak.css", false, '/', false);
    $_COOKIE['tema'] = "kmedenjak.css";
}

$tema = $_COOKIE['tema'];


if(isset($naslov) && isset($glavniNaslov) && isset($drugiNaslov) && isset($putanja)) {
    $smarty->assign("tema", $tema);
    $smarty->assign("naslov", $naslov);
    $smarty->assign("glavniNaslov", $glavniNaslov);
    $smarty->assign("drugiNaslov", $drugiNaslov);
    $smarty->assign("putanja", $putanja);
    $smarty->display('zaglavlje.tpl');
}
?>