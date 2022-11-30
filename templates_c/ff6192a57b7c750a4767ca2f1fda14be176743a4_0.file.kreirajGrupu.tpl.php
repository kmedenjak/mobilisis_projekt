<?php
/* Smarty version 3.1.39, created on 2021-06-15 22:42:07
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/kreirajGrupu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9109fa1f132_72502037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6192a57b7c750a4767ca2f1fda14be176743a4' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/kreirajGrupu.tpl',
      1 => 1623783907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9109fa1f132_72502037 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greske" style="color:red">
                <?php if ((isset($_smarty_tpl->tpl_vars['greska']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
</p>
                <?php }?>
            </div>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>

            <canvas id="pravokutnik" width="400" height="40"></canvas>
            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 420px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        <input class="gumb" name="grupaKreiraj" type="submit" value="Kreiraj"/>
                        <br><br>
                        <br>
                        <br>
                        
                           <canvas id="pravokutnik2" width="400" height="40"></canvas>
                            <label for="nazivDodaj" id="labela">Naziv grupe: </label>
                            <input class="formaInput" name="nazivDodaj" type="text">
                            <br> <br>
                            
                            <canvas id="pravokutnik3" width="400" height="40"></canvas>
                            <span id="greske" style="color: red;"></span>
                            <label id="labela5" for="opisDodaj"> Opis grupe: </label>
                            <br><br>
                            <canvas id="pravokutnik4" width="400" height="40"></canvas>
                            <textarea id="opisGrupe" name="opisDodaj" style="width: 100%; height: 150px"></textarea>
                            <br> <br>

                    </form>

                </div>
            </div>

<?php }
}
