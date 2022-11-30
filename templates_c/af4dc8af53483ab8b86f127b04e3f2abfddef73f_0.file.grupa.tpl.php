<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:40:17
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/grupa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c91031e4d331_73794131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af4dc8af53483ab8b86f127b04e3f2abfddef73f' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/grupa.tpl',
      1 => 1623783907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c91031e4d331_73794131 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greske" style="color:red">
                <?php if ((isset($_smarty_tpl->tpl_vars['greska']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
</p>
                <?php }?>
            </div>
<h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>
<div class="statistika">
    <div class="podaciStatistike">
        <a class="gumb" style="width: 150px; text-decoration: none;" name="grupaDodjela" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/dodjelaModeratora.php">Dodjela moderatora</a>
        <a class="gumb" style="width: 100px; text-decoration: none;" name="kreirajGrupu" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/kreirajGrupu.php">Kreiraj grupu</a>
        <form method="post" action="">
        <input class="formaInput" style="width: 200px;" type="text" name="unosPretrage" placeholder="Pretraga...">
        <input type="submit" name="pretrazi" value="Pretraži" class="gumbPrikazi"><br><br>
        <p>Kliknite na ID grupe koju želite ažurirati:</p>
        <table border=1 style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ GRUPA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID GRUPE</th>
            <th><a href="grupa.php?redSortiranja=naziv_grupe&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">NAZIV</a></th>
            <th><a href="grupa.php?redSortiranja=opis_grupe&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">OPIS</a></th>
        </tr>
        </thead>
        <tbody>
            <?php if (!empty($_smarty_tpl->tpl_vars['redovi']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['redovi']->value, 'red');
$_smarty_tpl->tpl_vars['red']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['red']->value) {
$_smarty_tpl->tpl_vars['red']->do_else = false;
?>
                <tr>
                    <td><a href="obrasci/azurirajGrupu.php?id=<?php echo $_smarty_tpl->tpl_vars['red']->value['grupa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['red']->value['grupa_id'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['naziv_grupe'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['opis_grupe'];?>
</td>
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
<?php }
}
