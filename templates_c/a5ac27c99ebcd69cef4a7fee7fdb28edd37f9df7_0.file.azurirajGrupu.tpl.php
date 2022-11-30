<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:41:48
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/azurirajGrupu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9108c3dc068_43131138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ac27c99ebcd69cef4a7fee7fdb28edd37f9df7' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/azurirajGrupu.tpl',
      1 => 1623783908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9108c3dc068_43131138 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greske" style="color:red">
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
                <div class="obrubObrazac" style="width: 500px; height: 650px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        <input class="gumb" name="grupaAzuriraj" type="submit" value="Ažuriraj"/>
                        <br><br>
                        <br>
                        <br>
                           
                            <label for="nazivGrupe" id="labela">Naziv grupe: </label>
                            <input class="formaInput" name="nazivGrupe" type="text" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
">
                            <br> <br>
                            <span id="greske" style="color: red;"></span>
                            <label id="labela5" for="opisGrupe"> Opis grupe: </label>
                            <br><br>
                            <textarea id="opisGrupe" name="opisGrupe" style="width: 100%; height: 150px"><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</textarea>
                            <br> <br>
                            
                            <label id="labela5" for="moderatorGrupe"> Moderator grupe: </label>
                            <br>
                            <input class="formaInput" name="moderatorGrupe" type="text" value="<?php echo $_smarty_tpl->tpl_vars['moderator']->value;?>
" disabled>
                            <br> <br>

                    </form>
                </div>
            </div>
<?php }
}
