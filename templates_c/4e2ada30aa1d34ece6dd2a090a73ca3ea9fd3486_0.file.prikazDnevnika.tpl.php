<?php
/* Smarty version 3.1.39, created on 2022-11-30 16:55:44
  from 'C:\xampp\htdocs\projekt\templates\prikazDnevnika.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63877d00199bf4_87208468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2ada30aa1d34ece6dd2a090a73ca3ea9fd3486' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\templates\\prikazDnevnika.tpl',
      1 => 1659455772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63877d00199bf4_87208468 (Smarty_Internal_Template $_smarty_tpl) {
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
        <caption style="font-size: 40px; color: #333;">PRIKAZ GRUPA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID DNEVNIKA</th>
            <th><a href="?redSortiranja=radnja&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">RADNJA</a></th>
            <th><a href="?redSortiranja=upit&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">UPIT</a></th>
            <th><a href="?redSortiranja=datum_vrijeme&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">DATUM I VRIJEME</a></th>
            <th><a href="?redSortiranja=ime&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">IME</a></th>
            <th><a href="?redSortiranja=prezime&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">PREZIME</a></th>
            <th><a href="?redSortiranja=naziv_tipa&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">NAZIV TIPA</a></th>
            <th><a href="?redSortiranja=opis_tipa&&sortiranje=<?php echo $_smarty_tpl->tpl_vars['sortiranje']->value;?>
" style="text-decoration: none; color: #ccc;">OPIS TIPA</a></th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['dnevnik_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['radnja'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['upit'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['datum_vrijeme'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['ime'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['prezime'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['naziv_tipa'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['red']->value['opis_tipa'];?>
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
