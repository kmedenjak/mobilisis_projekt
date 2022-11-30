<?php
/* Smarty version 3.1.39, created on 2022-11-30 16:55:44
  from 'C:\xampp\htdocs\projekt\templates\popisRodendana.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63877d00c33676_74710380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2c9184449892e4e9d89c5836025550040db353' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\templates\\popisRodendana.tpl',
      1 => 1659455772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63877d00c33676_74710380 (Smarty_Internal_Template $_smarty_tpl) {
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
        <caption style="font-size: 40px; color: #333;">PRIKAZ ROĐENDANA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID ROĐENDANA</th>
            <th><a href="?redSortiranja=naziv_rodendana&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">NAZIV</a></th>
            <th><a href="?redSortiranja=opis_rodendana&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">OPIS</a></th>
            <th><a href="?redSortiranja=zamjenski_termin&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">ZAMJENSKI TERMIN</a></th>
            <th>ID REZERVACIJE</th>
            <th><a href="?redSortiranja=ime&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">IME</a></th>
            <th><a href="?redSortiranja=prezime&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">PREZIME</a></th>
            <th>OTKAŽI</th>
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
                    <td><a href="obrasci/azurirajRodendan.php?id=<?php echo $_smarty_tpl->tpl_vars['red']->value['rodendan_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['red']->value['rodendan_id'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['naziv_rodendana'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['opis_rodendana'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['zamjenski_termin'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['ime'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['prezime'];?>
</td>
                    <td><a class="gumb" style="margin: 2px; padding: 5px;text-decoration: none;" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/zamjenskiTermin.php?a=<?php echo $_smarty_tpl->tpl_vars['red']->value['rezervacija_id'];?>
">OTKAŽI</a></td>
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
