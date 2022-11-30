<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:30:59
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/kreirajRodendan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c90e03c7d5e9_42270464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '529fb7a9421b6095a86ac9c5dc75fb2b2ab1ac2c' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/kreirajRodendan.tpl',
      1 => 1623783909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c90e03c7d5e9_42270464 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 400px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        <input class="gumb" name="rodendanDodaj" type="submit" value="Dodaj"/>
                        <br><br>
                            
                            <label for="nazivRodendana">Naziv rođendana:</label>
                            <input class="formaInput" type="text" id="nazivRodendana" name="nazivRodendana"/>
                            <br> <br>

                            <label for="opisRodendana">Opis rođendana: </label>
                            <textarea id="opisGrupe" name="opisRodendana" style="width: 100%; height: 150px"></textarea>
                            <br> <br>
                            <br>
                    </form>
                </div>
            </div>
<?php }
}
