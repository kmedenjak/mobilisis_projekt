<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:42:31
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/dodjelaModeratora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c910b7059c80_42842011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f87fd5f1a946a6813741af307bbaa9ab5067d6d' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/dodjelaModeratora.tpl',
      1 => 1623783909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c910b7059c80_42842011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/vanjske_biblioteke/smarty-3.1.39/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div id="greske" style="color:red">
                <?php if ((isset($_smarty_tpl->tpl_vars['greska']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
</p>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['poruka']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['poruka']->value;?>
</p>
                <?php }?>
            </div>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 420px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        <input class="gumb" name="moderatorDodaj" type="submit" value="Dodijeli"/>
                        <br><br>
                        <br>
                        <br>

                            <span id="greske" style="color: red;"></span>
                            <label id="labela5" for="opisDodjele"> Opis dodjele: </label>
                            <br><br>
                            <textarea id="opisGrupe" name="opisDodjele" style="width: 100%; height: 150px"></textarea>
                            <br> <br>
                            
                            <label>Odabir grupe:</label>
                            <select name="grupa">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['redovi']->value, 'grupa');
$_smarty_tpl->tpl_vars['grupa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['grupa']->value) {
$_smarty_tpl->tpl_vars['grupa']->do_else = false;
?>
                                <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['grupa']->value['naziv_grupe'],'values'=>$_smarty_tpl->tpl_vars['grupa']->value['grupa_id']),$_smarty_tpl);?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <br><br>
                            <label>Odabir moderatora:</label>
                            <select name="moderator">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['redovi']->value, 'moderator');
$_smarty_tpl->tpl_vars['moderator']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moderator']->value) {
$_smarty_tpl->tpl_vars['moderator']->do_else = false;
?>
                                <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['moderator']->value['prezime'],'values'=>$_smarty_tpl->tpl_vars['moderator']->value['korisnik_id']),$_smarty_tpl);?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                    </form>
                </div>
            </div>


<?php }
}
