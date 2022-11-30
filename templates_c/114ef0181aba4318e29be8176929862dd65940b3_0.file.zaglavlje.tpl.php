<?php
/* Smarty version 3.1.39, created on 2022-11-30 16:28:20
  from 'C:\xampp\htdocs\projekt\templates\zaglavlje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6387769404b7b8_50779731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '114ef0181aba4318e29be8176929862dd65940b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\templates\\zaglavlje.tpl',
      1 => 1659455772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387769404b7b8_50779731 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='hr'>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Naslov" content="Početna stranica">
        <meta name="Autor" content="Karla Medenjak">
        <meta name="Opis" content="Početna stranica na kojoj se nalazi tablica, 19.03.2021.">
        <meta name="Tri ključne riječi" content="Rođendan, tablica, slika">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['tema']->value;?>
" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['tema']->value;?>
" media="print" type="text/css"/>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/javascript/kmedenjak_pomoc.js"><?php echo '</script'; ?>
>
        <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">-->
        <!--<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="javascript/kmedenjak_jquery.js"><?php echo '</script'; ?>
>-->
    </head>

    <body>
        <header style="text-align: center">
            <a href="https://www.facebook.com/">
                <img class="slikaPocetna" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/facebook-logo.png" alt="facebook">
            </a>
            <a href="https://www.instagram.com/">
                <img class="slikaPocetna" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/instagram-logo.png" alt="instagram">
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/rss.php">
                <img class="slikaPocetna" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/rss-logo.png" alt="rss">
            </a>
                <img class="slikaPocetna" id="ikonaTeme" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/ikonaPristupacnosti.png" alt="ikona">
                <img class="slikaPocetna" id="ikonaDark" style="float: left;" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/darkLight.png" alt="ikonaDark">
            <h1>
                <a class="rodendan" href="#sadrzaj"> <?php echo $_smarty_tpl->tpl_vars['glavniNaslov']->value;?>
 </a>
            </h1>

        </header>

        <nav class ="stupac_1">
            <ul class="navigacijaLi">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/index.php">Početna stranica</a></li>
                <?php if ((isset($_SESSION['uloga'])) && $_SESSION['uloga'] == 1) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/grupa.php">Grupa</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/prikazDnevnika.php">Dnevnik</a></li>
                <?php }?>
                <?php if ((isset($_SESSION['uloga'])) && $_SESSION['uloga'] <= 2) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/rodendan.php">Rođendan</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/popisRodendana.php">Popis rođendana</a></li>
                <?php }?>
                <?php if ((isset($_SESSION['uloga'])) && $_SESSION['uloga'] <= 3) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/rezervacija.php">Rezervacija</a></li>
                <?php }?>
                <?php if ((isset($_SESSION['uloga'])) && $_SESSION['uloga'] < 4) {?> 
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/galerija.php">Galerija</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/odjava.php">Odjava</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/dokumentacija.php">Dokumentacija</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/autor.php">Autor</a></li>
                <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/dokumentacija.php">Dokumentacija</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/autor.php">Autor</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/prijava.php">Prijava</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/registracija.php">Registracija</a></li>
                <?php }?>
                
                
            </ul>
        </nav>
        <section id="sadrzaj">
<?php echo '<script'; ?>
>
    $("#ikonaTeme").click(function (){
        var kolacic = document.cookie;
        if(kolacic.includes("kmedenjak.css")){
            document.cookie = "tema=kmedenjak_accesibility.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility.css")){
            document.cookie = "tema=kmedenjak.css; path=/";
        }else if(kolacic.includes("kmedenjak_dark.css")){
             document.cookie = "tema=kmedenjak_accesibility_dark.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility_dark.css")){
            document.cookie = "tema=kmedenjak_dark.css; path=/";
        }
            location.reload();
    });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $("#ikonaDark").click(function (){
        var kolacic = document.cookie;
        if(kolacic.includes("kmedenjak.css")){
            document.cookie = "tema=kmedenjak_dark.css; path=/";
        }else if(kolacic.includes("kmedenjak_dark.css")){
            document.cookie = "tema=kmedenjak.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility.css")){
            document.cookie = "tema=kmedenjak_accesibility_dark.css; path=/";
        }else if(kolacic.includes("kmedenjak_accesibility_dark.css")){
            document.cookie = "tema=kmedenjak_accesibility.css; path=/";
        }
            location.reload();
    });
<?php echo '</script'; ?>
><?php }
}
