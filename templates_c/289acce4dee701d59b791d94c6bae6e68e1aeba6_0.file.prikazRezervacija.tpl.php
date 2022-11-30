<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:30:43
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/prikazRezervacija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c90df31e32c1_57923190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289acce4dee701d59b791d94c6bae6e68e1aeba6' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/prikazRezervacija.tpl',
      1 => 1623783908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c90df31e32c1_57923190 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="post" action="">
        <input class="formaInput" style="width: 200px;" type="text" name="unosPretrage" placeholder="Pretraga...">
        <input type="submit" name="pretrazi" value="Pretraži" class="gumbPrikazi"><br><br>
        <table border=1 style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ REZERVACIJA</caption>
        <thead>
            <th>ID REZERVACIJE</th>
            <th><a href="prikazRezervacija.php?redSortiranja=broj_djece&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">BROJ DJECE</a></th>
            <th><a href="prikazRezervacija.php?redSortiranja=datum&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">DATUM</a></th>
            <th><a href="prikazRezervacija.php?redSortiranja=status&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">STATUS</a></th>
            <th>SUDIONICI</th>
            <th>GRUPA</th>
            <th>OPIS GRUPE</th>
            <th>POTVRDI</th>
            <th>ODBIJ</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['broj_djece'];?>
</td>
                    <td class="datum"><?php echo $_smarty_tpl->tpl_vars['red']->value['datum'];?>
</td>
                    <td class="status"><?php echo $_smarty_tpl->tpl_vars['red']->value['status'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['ImePrezime'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['naziv_grupe'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['opis_grupe'];?>
</td>
                    <td><a class="gumb" style="margin: 2px; padding: 5px;text-decoration: none;" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/potvrdiRezervaciju.php?a=<?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
">POTVRDI</a></td>
                    <td><a class="gumb" id="gumbOdbij" style="margin: 2px; padding: 5px;text-decoration: none;" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/odbijRezervaciju.php?a=<?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
">ODBIJ</a></td>
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
        
<?php echo '<script'; ?>
>
    datum = document.getElementsByClassName("datum");
    for(i=0; i<datum.length; i++){ 
        for(j=0; j<i; j++){
            if(datum[i].innerHTML === datum[j].innerHTML){
                datum[i].style.backgroundColor = "#e69595";
                datum[j].style.backgroundColor = "#e69595";
            }
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
