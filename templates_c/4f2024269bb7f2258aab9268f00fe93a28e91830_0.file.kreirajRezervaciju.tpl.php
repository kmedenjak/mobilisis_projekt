<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:22:20
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/kreirajRezervaciju.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c90bfc20ad18_59687282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2024269bb7f2258aab9268f00fe93a28e91830' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/kreirajRezervaciju.tpl',
      1 => 1623783907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c90bfc20ad18_59687282 (Smarty_Internal_Template $_smarty_tpl) {
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
            
            <canvas id="pravokutnik" width="400" height="40"></canvas>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 570px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        <input class="gumb" name="rezervacijaDodaj" type="submit" value="Dodaj"/>
                        <br><br>
                        
                            <canvas id="pravokutnik2" width="400" height="40"></canvas>
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
                            
                            <canvas id="pravokutnik3" width="400" height="40"></canvas>
                            <label for="datumRezervacije">Unesite datum termina:</label>
                            <input class="formaInput" type="text" id="datumRezervacije" name="datumRezervacije"/>
                            <br> <br>
                            
                            <canvas id="pravokutnik4" width = "400" height= "40"></canvas>
                            <label for="brojDjece">Unesite broj djece: </label>
                            <input class="formaInput" type="text" id="brojDjece" name="brojDjece"/>
                            <br><br>
                            
                            <canvas id="pravokutnik5" width = "400" height= "40"></canvas>
                            <canvas id="pravokutnik6" width = "400" height= "40"></canvas>
                            <fieldset>
                                <legend>Popis sudionika rođendana</legend>
                                <input class="gumb" name="sudioniciDodaj" type="submit" value="Dodaj"/>
                            <br>
                            <textarea id="opisGrupe" name="imePrezime" style="width: 100%; height: 150px"></textarea>
                            <br> <br>
                            </fieldset>
                            <br>
                    </form>
                </div>
            </div><?php }
}
