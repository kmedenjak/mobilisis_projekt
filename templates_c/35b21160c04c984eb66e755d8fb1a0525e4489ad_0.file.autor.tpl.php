<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:29:20
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/autor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c90da0f09185_61448443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35b21160c04c984eb66e755d8fb1a0525e4489ad' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/autor.tpl',
      1 => 1623783909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c90da0f09185_61448443 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<div class="autorPodloga"> <br>

                <br>
                <h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>
                <br>
                <div class="tekstObrazac">
                    <div style="float:left">                    
                        <p class="autor">Ime: Karla</p> 
                        <p class="autor">Prezime: Medenjak</p> 
                        <p class="autor">E-mail: <a href="mailto:kmedenjak@foi.hr">kmedenjak@foi.hr</a> </p>
                    </div>
                    <div style="float:right; margin-left:5%">  
                        <img src="multimedija/ja.jpg" alt='moja_slika' style="width:150px; height: 150px" />
                    </div>
                </div>
                <h3>Citat</h3>
                <div class="tekstObrazac2">
                    <p class="autor">
                        "If you don't design your own life plan, chances are you'll fall into someone else's plan. 
                        And guess what they have planned for you? Not much." (Izvor: <a href="https://www.brainyquote.com/quotes/jim_rohn_165075">Jim Rohn</a>)
                    </p>
                    <h4>Rođendani</h4>
                    <p class="autor">
                        Rođendan je dan u godini, kada se slavi obljetnica rođenja. Slavi se u mnogim kulturama. Slavljenik za rođendan dobiva darove i organizira rođendansku proslavu. 
                        Do 1814. godine, nije se uopće bilježio dan rođenja, nego samo dan krštenja u crkvenim maticama krštenih. 
                        Posebno se slavi 18. rođendan, kada osoba postaje punoljetna, često uz raskošnu zabavu. Značajnije se slave i rođendani s okruglim brojem godina, a osobito 100.
                        Rođendan, koji se često poprati i u medijima. Osobe koje su rođene 29. veljače, mogu slaviti rođendan na taj dan samo svake 4. prijestupne godine pa ga obično slave 28. veljače.
                        (Izvor:<a href="https://hr.wikipedia.org/wiki/Ro%C4%91endan">Wikipedia</a>)
                    </p>
                </div>
                <h5>Video</h5>
                <div class="tekstObrazac3">
                    <iframe width="1093" height="615" style="height: 615px; width: 100%" src="https://www.youtube.com/embed/d82BPHicxQQ?autoplay=1" allowfullscreen>
                    </iframe>
                </div>
            </div>
<?php }
}
