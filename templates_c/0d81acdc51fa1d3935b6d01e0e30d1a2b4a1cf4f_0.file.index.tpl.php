<?php
/* Smarty version 3.1.39, created on 2021-06-15 21:10:20
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c8fb1ca51904_26668833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d81acdc51fa1d3935b6d01e0e30d1a2b4a1cf4f' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/index.tpl',
      1 => 1623783909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c8fb1ca51904_26668833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/vanjske_biblioteke/smarty-3.1.39/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
echo '<script'; ?>
 src="javascript/kmedenjak_pdf.js"><?php echo '</script'; ?>
>
<div id="greske" style="color:red">
                <?php if ((isset($_smarty_tpl->tpl_vars['greska']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
</p>
                <?php }?>
            </div>
<?php echo smarty_function_html_image(array('file'=>'multimedija/Pozadina.jpg'),$_smarty_tpl);?>

<?php if ((isset($_SESSION['uloga'])) && $_SESSION['uloga'] < 2) {?>
<h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['pomak']->value;?>
</h2>
<div class="statistika">
    <div class="podaciStatistike">
        
        <form name="formaVrijeme", id="fromaVrijeme" method="post", action="">
            
             <p>Virtualno vrijeme: </p>
                <a target="_blank" href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html" style="text-decoration: none;">Postavi virtualno vrijeme</a>
                <p>Spremanje pomaka u XML</p><br>
            <input class="gumbPrikazi" name="postaviVrijeme" type="submit" value="Postavi"><br>
        </form>
        <br>    
    </div>
</div>
<?php }?>


<h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['statistikaNaslov']->value;?>
</h2>
<div class="statistika">
    <div class="podaciStatistike" id="statistika">
        <form method="post" action="">
            <input class="gumbPrikazi" id="gumbPDF" name="gumbPDF" type="submit" value="PDF"><br>
        <table border=1 id="tablicaGrupa" style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ RO??ENDANDA PO GRUPI</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>NAZIV GRUPE</th>
            <th>BROJ RO??ENDANA</th>
        </tr>
        </thead>
        <tbody>
            <?php if (!empty($_smarty_tpl->tpl_vars['redovi2']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['redovi2']->value, 'red2');
$_smarty_tpl->tpl_vars['red2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['red2']->value) {
$_smarty_tpl->tpl_vars['red2']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['red2']->value['naziv_grupe'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red2']->value['brojRodendana'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
        </form>
    </div>
</div>
<br>
<br>

<h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['rssNaslov']->value;?>
</h2>
<div class="statistika">
    <div class="podaciStatistike">
        
        
        <form method="post" action="">
        <input class="formaInput" style="width: 200px;" type="text" name="unosPretrage" placeholder="Pretraga...">
        <input type="submit" name="pretrazi" value="Pretra??i" class="gumbPrikazi"><br><br>
        <p>Kliknite na ID grupe koju ??elite prikazati u RSS-u:</p>
        <table border=1 id="tablicaGrupa" style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ GRUPA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID GRUPE</th>
            <th><a href="index.php?redSortiranja=naziv_grupe&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">NAZIV</a></th>
            <th><a href="index.php?redSortiranja=opis_grupe&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">OPIS</a></th>
        </tr>
        </thead>
        <tbody>
            <?php if (!empty($_smarty_tpl->tpl_vars['redovi1']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['redovi1']->value, 'red1');
$_smarty_tpl->tpl_vars['red1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['red1']->value) {
$_smarty_tpl->tpl_vars['red1']->do_else = false;
?>
                <tr>
                    <td><a href="rss.php?id=<?php echo $_smarty_tpl->tpl_vars['red1']->value['grupa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['red1']->value['grupa_id'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red1']->value['naziv_grupe'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red1']->value['opis_grupe'];?>
</td
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
        </form>
        <br>    
    </div>
</div>

 
<div class="statistika">
<div class="podaciStatistike">

<table border=1 id="tablicaGrupa" style="background-color: white; color: #333">
    <caption style="font-size: 40px; color: #333;">PRIKAZ PODATAKA</caption>
    <thead>
    <tr style="background-color: #333; color: #ccc;">
        <th>ID RO??ENDANA</th>
        <th>NAZIV</th>
        <th>IME PREZIME</th>
    </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['redovi']->value, 'red');
$_smarty_tpl->tpl_vars['red']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['red']->value) {
$_smarty_tpl->tpl_vars['red']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['red']->value['rodendan_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['red']->value['naziv_rodendana'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['red']->value['ImePrezime'];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
</div>
</div>



<?php }
}
