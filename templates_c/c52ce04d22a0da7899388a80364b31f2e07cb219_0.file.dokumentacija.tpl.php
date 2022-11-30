<?php
/* Smarty version 3.1.39, created on 2022-11-30 16:40:18
  from 'C:\xampp\htdocs\projekt\templates\dokumentacija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6387796251d416_16186935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c52ce04d22a0da7899388a80364b31f2e07cb219' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\templates\\dokumentacija.tpl',
      1 => 1659455772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387796251d416_16186935 (Smarty_Internal_Template $_smarty_tpl) {
?>   
<div class="autorPodloga"> <br>
                <br>
                <h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>
                <br>
                <div class="tekstObrazac">
                    <p>Projektni zadatak je bio vezan za rođendane, odnosno za kreiranje i rezevaciju rođendanske zabave. Cilj je omogućiti koriniku na što bezbolniji i lakši način
                    rezervaciju rođedanske zabave prema određenoj dobnoj skupini. Kreiranje rezervacije za pojedini rođendan, mogao je obaviti samo korisnik koji je registriran. 
                    Svaki neregistrirani korinik imao je mogućnost rezervacije, klikom na rezervaciju koja se nalazi u navigacijskoj traci. Registracijom u sustav, korisnik je dužan unijeti
                    svoje osobne podatke. Nakon registracije i uspješne prijave, korisnik može rezervirati rođendan. Moderator je zadužen za prihvaćanje i odbijanje kreiranih rezervacija. 
                    Ako je rezervacija prihvaćena, dolazi do kreiranja rođendana. Administrator ima sve mogućnosti kao i prethodne uloge.</p>
                </div>
                <h3>Opis projektnog rješenja:</h3>
                <div class="tekstObrazac2">
                    <p class="autor">
                        Projektno rješenje bazira se na upotrebi prograskih jezika PHP-a, HTML-a i JavaScript-a. Realizirano je na način da je cijeli projekt podijeljen na određene sekcije i
                        uloge korisnika. Postoje četiri uloge, a to su neregistrirani korisnik, registrirani korisnik, moderator i administator. Svaka od navednih uloga ima svoja određena
                        prava i mogućnosti. Neregistrirani korisnik ima pravo vidjeti stranice vezane za autora, domunetaciju, početnu stracnicu, registraciju i prijavu. Svaki se korisnik
                        može registrirai unosom svojih podataka na formu registracije. Nakon uspješne regsitracije korisnik postaje registrirani korisnik i dobiva tu ulogu te tada tek može
                        kreirati određene rezervacije. Nove opcije, kao što je već spomenuto su, kreiranje rezervacija, pregled i ažuriranje rezervacija te njihovo brisanje. Svaki registrirani
                        korisnik, ispunjavanjem obrasca može kreirati rezervaciju rođendana. Tek nakon što je ona kreirana, ima mogućnosti ažuriranja i brisanja te rezervacije. Nadalje, uloga
                        moderatora ima opciju potvrđivanja ili odbijanja rezervacije te kreiranja, pregleda i ažuriranja rođendana. Također, moderator ima sve opcije kao i uloge prije njega,
                        odnosno jednako kao što imaju neregistrirani korisnik i moderator. Uloga administratora je najjaća uloga te administrator, uz to što ima uvid u sve u što imaju prethodne
                        uloge, ima i mogućnost postavljanja virtualnog vremena, pregleda dnevnika te greiranja i ažuriranja grupa. 
                    </p>
                </div>
                <h3>ERA:</h3>
                <img class="dijagram" src="multimedija/era.png" alt="kmedenjakERA" onclick="promjenaDimenzijeDijagrama(this)">
                <h3>Navidacijski dijagram:</h3>
                <img class="dijagram" src="multimedija/NavigacijskiDijagram.png" alt="kmedenjakERA" onclick="promjenaDimenzijeDijagrama(this)">
                <p>Na prethodnoj slici, prikazan je navgacijski dijagram projekta. N adijagramu je jasno vidljivo na koju se ulogu odnosi koja opcija ili aktivnost. Neregistrirani
                korisnik je označen sivom bojom, registrirani korisnik žutom bojom, moderator zelenom, a administrator crvenom bojom. Skripte koje su korištene kod izrade su
                skripta vezana za validaciju gdje se validira pet unosa kod registracije, zatim skripta na kojoj je definirana captcha, skripta u kojoj mi se generira dokument u PDF formatu i 
                skripta za pooć korisniku.</p>
                <h3>Korištene tehnologije i alati:</h3>
                <p>Projekt je kreiran u programskom alatu NetBeansu gdje je pisan kod u jezicima PHP, HTML, JavaScrip te je upotrebljen Smarty. Preglednik za testiranje aplikacije je
                Chromium. Baza je prvenstvo kreirana u MySQL Workebencu, a rad se zatim nastavio lokalno u phpmyadmin. Baza i sam projekt je kasnije prebaćen na server.</p>
                </div>
                <br>
         <?php echo '<script'; ?>
>
                function promjenaDimenzijeDijagrama(img) {
                    img.style.width = "1300px";
                    img.style.height = "850px";
                }
        <?php echo '</script'; ?>
>

<?php }
}
