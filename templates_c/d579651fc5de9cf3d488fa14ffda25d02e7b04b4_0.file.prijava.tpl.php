<?php
/* Smarty version 3.1.39, created on 2021-06-15 21:36:27
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/prijava.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9013bc97b16_91130343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd579651fc5de9cf3d488fa14ffda25d02e7b04b4' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/prijava.tpl',
      1 => 1623783909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9013bc97b16_91130343 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greske" style="color:red">
                <?php if ((isset($_smarty_tpl->tpl_vars['greska']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
</p>
                <?php }?>

            </div>
            <div id="poruka" style="color:green">
                <?php if ((isset($_smarty_tpl->tpl_vars['poruka']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['poruka']->value;?>
</p>
                <?php }?>
            </div>
            <canvas id="pravokutnik" width="400" height="40"></canvas>
            <div class="polozajPrijava">
                <div class="obrubPrijava" style="height: 400px">
                    <form class="prijavaForma" name="prijava" id="prijava" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">

                        <canvas id="pravokutnik2" width="400" height="40"></canvas>
                        <label for="korisnickoIme">Korisničko ime: </label>
                        <input class="formaInput" name="korisnickoIme" id="korisnickoIme" type="text" value="<?php echo $_smarty_tpl->tpl_vars['korisnik']->value;?>
" />
                        <br> <br>

                        <canvas id="pravokutnik3" width="400" height="40"></canvas>
                        <label for="lozinka">Lozinka: </label>
                        <input class="formaInput" name="lozinka"  id="lozinka" type="password" />
                        <br> <br>

                        <canvas id="pravokutnik4" width = "400" height= "40"></canvas>
                        <label for="zapamti"> Zapamti me: </label>
                        <input type="checkbox" id="zapamti" name="zapamti" value="zapamti">
                        <br>
                        
                        <canvas id="pravokutnik5" width = "400" height= "40"></canvas>
                        <input class="gumbPrijava" name="submit" type="submit" value="Prijava"/>
                        
                    </form>
                </div>
            </div>
<?php }
}
