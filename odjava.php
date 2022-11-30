<?php
    $putanja = dirname($_SERVER["REQUEST_URI"]);
    
    $direktorij = getcwd();
    include './zaglavlje.php';
    require "$direktorij/dnevnik.php";
    Sesija::obrisiSesiju();
    
    $radnja = "Odjava sa sustava";
    $upitDnevnik = "-";
    $tip = 1;
    dnevnik_zapis($radnja, $upitDnevnik, $_COOKIE['idKorisnika'], $tip);
    
    header("Location: obrasci/prijava.php");
    


