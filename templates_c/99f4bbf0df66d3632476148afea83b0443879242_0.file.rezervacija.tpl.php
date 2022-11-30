<?php
/* Smarty version 3.1.39, created on 2021-06-15 21:59:24
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/rezervacija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9069c84c1b2_42568479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f4bbf0df66d3632476148afea83b0443879242' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/rezervacija.tpl',
      1 => 1623783908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9069c84c1b2_42568479 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="gumb" style="width: 130px; text-decoration: none;" name="kreirajRezervaciju" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/kreirajRezervaciju.php">Kreiraj rezervaciju</a>
        <p>Kliknite na ID rezervacije koju želite ažurirati:</p>
        <table border=1 style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ REZERVACIJA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <td>ID REZERVACIJE</td>
            <td>BROJ DJECE</td>
            <td>DATUM</td>
            <td>STATUS</td>
            <td>SUDIONICI</td>
            <td>GRUPA</td>
            <td>OPIS GRUPE</td>
            <td>OBRIŠI</td>
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
                    <td><a href="obrasci/azurirajRezervaciju.php?id=<?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['broj_djece'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['datum'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['status'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['ImePrezime'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['naziv_grupe'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['opis_grupe'];?>
</td>
                    <td><a class="gumb" style="margin: 2px; padding: 5px;text-decoration: none;" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrisiRezervaciju.php?a=<?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
">OBRIŠI</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
        <br>    
    </div>
</div>
<?php }
}
