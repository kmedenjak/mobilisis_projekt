<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:33:18
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/zamjenskiTermin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c90e8ee31166_38120549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94b3b778036a78b9683c4052128dfbc86265b427' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/zamjenskiTermin.tpl',
      1 => 1623783908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c90e8ee31166_38120549 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greske" style="color:red">
                <?php if ((isset($_smarty_tpl->tpl_vars['greska']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
</p>
                <?php }?>
            </div>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 300px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        <input class="gumb" name="terminDodaj" type="submit" value="Dodaj"/>
                        <br><br>
                        <br>
                        <br>
                            <label for="terminStari" id="labela">Stari termin: </label>
                            <input class="formaInput" name="terminStari" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
">
                            <br> <br>
                        
                            <label for="teminNovi" id="labela">Novi termin: </label>
                            <input class="formaInput" name="nazivNovi" type="text">
                            <br> <br>

                    </form>

                </div>
            </div>


<?php }
}
