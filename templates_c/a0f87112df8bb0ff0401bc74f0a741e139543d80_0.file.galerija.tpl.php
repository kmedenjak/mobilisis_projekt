<?php
/* Smarty version 3.1.39, created on 2022-11-30 16:55:41
  from 'C:\xampp\htdocs\projekt\templates\galerija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63877cfdb86bb1_57055420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f87112df8bb0ff0401bc74f0a741e139543d80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\templates\\galerija.tpl',
      1 => 1659455772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63877cfdb86bb1_57055420 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>
<button id="gumbSlike" class="gumbSlike">Učitaj slike</button>
            <div class="SveSlike" id="slika">
                <figure>
                    <img class="slike" src="multimedija/Torta1.JPG" alt="Torta1">
                    <figcaption>Prva torta</figcaption>
                </figure> 
                <figure>
                    <img class="slike" src="multimedija/Torta2.jpg" alt="Torta2">
                    <figcaption>Druga torta</figcaption>
                </figure>
                <figure>
                    <img class="slike" src="multimedija/Torta3.jpg" alt="Torta3">
                    <figcaption>Treća torta</figcaption>
                </figure>
                <figure>
                    <img class="slike" src="multimedija/Torta4.jpg" alt="Torta4">
                    <figcaption>Četvrta torta</figcaption>
                </figure> 
                <figure>
                    <img class="slike" src="multimedija/Torta5.jpg" alt="Torta5">
                    <figcaption>Peta torta</figcaption>
                </figure> 
                <figure>
                    <img class="slike" src="multimedija/Torta6.jpg" alt="Torta6">
                    <figcaption>Šesta torta</figcaption>
                </figure>
                <figure>
                    <img class="slike" src="multimedija/Torta7.jpg" alt="Torta7">
                    <figcaption>Sedma torta</figcaption>
                </figure>
                <figure>
                    <img class="slike" src="multimedija/Torta8.JPG" alt="Torta8">
                    <figcaption>Osma torta</figcaption>
                </figure> 
                <figure>
                    <img class="slike" src="multimedija/Torta9.jpg" alt="Torta9">
                    <figcaption>Deveta torta</figcaption>
                </figure> 
                <figure>
                    <img class="slike" src="multimedija/Torta10.jpg" alt="Torta10">
                    <figcaption>Deseta torta</figcaption>
                </figure> 
                <figure>
                    <img class="slike" src="multimedija/Torta11.jpeg" alt="Torta11">
                    <figcaption>Jedanaesta torta</figcaption>
                </figure> 
                <figure>
                    <img class="slike" src="multimedija/Torta12.jpg" alt="Torta12">
                    <figcaption>Devanaesta torta</figcaption>
                </figure> 
            </div>
            <div id="galSlike" style="display: flex; flex-wrap: wrap; overflow-x: auto; overflow-y: auto">
            </div>
<?php }
}
