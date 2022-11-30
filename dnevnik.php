<?php

function virtualno_vrijeme(){
    global $direktorij;
    $fp = fopen("$direktorij/xml/konfiguracija.xml",'r');
    $string = fread($fp, 10000);
    fclose($fp);
    
    $domdoc = new DOMDocument;
    $domdoc->loadXML($string);
    
    $params = $domdoc->getElementsByTagName('pomak');
    $pomak = 0;
    if($params != NULL){
        $pomak = $params->item(0)->nodeValue;
    }
    return $pomak;
}

function dnevnik_zapis($radnja, $upit, $korisnik, $tip) {

    $veza = new Baza();
    $veza->spojiDB();

    $vrijemeDatum = date('Y-m-d H:i:s');
    $stvarno = strtotime($vrijemeDatum);
    $vrijemeDatumPomak = $stvarno + (virtualno_vrijeme() *60 *60);
    $vrijemeDatumDnevnik = date('Y-m-d H:i:s', $vrijemeDatumPomak);
    $sql = "INSERT INTO dnevnik (radnja, upit, datum_vrijeme, korisnik_korisnik_id, tip_tip_id) VALUES ('$radnja', '$upit', '$vrijemeDatumDnevnik', '$korisnik', '$tip')";
    $rs = $veza->updateDB($sql);
    if (!$rs) {
        trigger_error("Problem kod upisa u bazu podataka!");
    }
    $veza->zatvoriDB();
}
?>


