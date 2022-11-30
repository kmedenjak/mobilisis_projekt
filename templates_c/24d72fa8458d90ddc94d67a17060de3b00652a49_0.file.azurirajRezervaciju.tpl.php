<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:18:44
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/azurirajRezervaciju.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c90b244380a5_44123336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d72fa8458d90ddc94d67a17060de3b00652a49' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/azurirajRezervaciju.tpl',
      1 => 1623783909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c90b244380a5_44123336 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="obrubObrazac" style="width: 500px; height: 700px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        <input class="gumb" name="rezervacijaAzuriraj" type="submit" value="Ažuriraj"/>
                        <br><br>
                        
                            <label for="moderatorGrupe"> Trenutna grupa: </label>
                            <br>
                            <input class="formaInput" name="grupa" type="text" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
" disabled>
                            <br> <br>
                            
                            <label>Odabir nove grupe (po želji):</label>
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
                            
                            <label for="datumRezervacije">Unesite datum termina:</label>
                            <input class="formaInput" type="text" id="datumRezervacije" name="datumRezervacije" value="<?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
"/>
                            <br> <br>

                            <label for="brojDjece">Unesite broj djece: </label>
                            <input class="formaInput" type="text" id="brojDjece" name="brojDjece" value="<?php echo $_smarty_tpl->tpl_vars['broj_djece']->value;?>
"/>
                            <br><br>
                            
                            <fieldset>
                                <legend>Popis sudionika rođendana</legend>
                                <input class="gumb" name="sudioniciDodaj" type="submit" value="Dodaj"/>
                            <br>
                            <textarea id="opisGrupe" name="imePrezime" style="width: 100%; height: 150px"><?php echo $_smarty_tpl->tpl_vars['sudionici']->value;?>
</textarea>
                            <br> <br>
                            </fieldset>
                            <br>
                    </form>
                </div>
            </div><?php }
}
