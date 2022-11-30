<?php
/* Smarty version 3.1.39, created on 2021-06-15 21:16:18
  from '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c8fc8230ab43_88120149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '114a645a8527034c43b556e3654bd31d182f56e0' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2020_projekti/WebDiP2020x059/templates/registracija.tpl',
      1 => 1623783908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c8fc8230ab43_88120149 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../javascript/kmedenjak_captcha.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../javascript/kmedenjak.js"><?php echo '</script'; ?>
>
<div id="greske" style="color:red">
                <?php if ((isset($_smarty_tpl->tpl_vars['greska']->value))) {?> 
                    <p><?php echo $_smarty_tpl->tpl_vars['greska']->value;?>
</p>
                <?php }?>
            </div>            
<h2 class="naslovUSadrzaju"><?php echo $_smarty_tpl->tpl_vars['drugiNaslov']->value;?>
</h2>
            <div class="polozajRegistracija">
                <div class="obrubRegistracija">
                    <form class="registracijaForma" name="registracija" id="registracija" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                        
                        <label for="ime">Ime: </label>
                        <input class="formaInput" name="ime" id="ime" type="text" placeholder="Ime"/>
                        <br> <br>

                        <label for="prezime" id="labelaPrezime">Prezime: </label>
                        <input class="formaInput" name="prezime" id="prezime" type="text" placeholder="Prezime"/>
                        <br> <br>
                        
                        <div id="korIme_poruka" ></div>
                        <label for="korisnickoIme">Korisničko ime: </label>
                        <input class="formaInput" name="korisnickoIme" id="korisnickoIme" type="text" maxlength="15" size="15" />
                        <br> <br>
                        
                        <label for="godina" id="labelaGodina">Godina rođenja: </label>
                        <input class="formaInput" name="godina"  id="godina" type="text">
                        <br> <br>
                        
                         <label for="mjesto" id="labela2"> Mjesto: </label>
                         <br><br>
                            <select class="mjesto" name="mjesto" style="width: 100%; height: 30px">
                                    <option> Čakovec </option>
                                    <option> Dubrovnik </option>
                                    <option> Koprivnica </option>
                                    <option> Osijek </option>
                                    <option> Rijeka </option>
                                    <option> Split </option>
                                    <option> Varaždin </option>
                                    <option> Zagreb </option>
                            </select> <br>
                            <br> <br> 
                       
                        
                        <label for="adresa">Adresa: </label>
                        <input class="formaInput" name="adresa"  id="adresa" type="text">
                        <br> <br> 
                        
                        <label for="postanskiBroj" id="labelaPostanskiBroj">Poštanski broj: </label>
                        <input class="formaInput" name="postanskiBroj"  id="postanskiBroj" type="text">
                        <br> <br> 
                        
                        <label id="labelaSpol">Spol:</label>
                        <br><br>
                            <input type="radio" name="spol" id="musko" value="Muško"/>
                            <label for="spol"> Muško </label>
                            
                            <input type="radio" name="spol" id="zensko" value="Žensko"/>
                            <label for="spol"> Žensko </label>
                            
                            <input type="radio" name="spol" id="ostalo" value="Ništa"/>
                            <label for="spol"> Ostalo </label>
                            <br><br>
                        
                        <label for="kontakt" id="labelaTel">Telefonski broj: </label>
                        <input class="formaInput" name="kontakt" id="kontakt" type="text">
                        <br> <br>
                        
                        <label for="eMail">E-mail: </label>
                        <input class="formaInput" name="eMail" id="eMail" type="email" maxlength="15" size="15" />
                        <br> <br>    

                        <label for="lozinka">Lozinka: </label>
                        <input class="formaInput" name="lozinka"  id="lozinka" type="password"/>
                        <br> <br>

                        <label for="potvrdaLozinke">Potvrda lozinke: </label>
                        <input class="formaInput" name="potvrdaLozinke"  id="potvrdaLozinke" type="password">
                        <br> <br>    
                        
                        <label for="datum">Datum: </label>
                        <input class="formaInput" name="datum" id="datum" type="text">
                        <br> <br> 
                        
                        <label for="vrijeme">Prihvaćanje uvjeta: </label>
                        <input type="checkbox" id="uvjet" name="uvjet"  value="uvjet">
                        <br><br> 
                        
                        <div class="vanjskiDio">
                            <div id="captchaBroj"></div>
                                <div class="captchaUnutar">
                                Unesite broj:<br>

                                <input type="hidden" id="txtCaptcha">
                                <input type="text" name="CaptchaInput" class="formaInput" id="CaptchaInput" size="15"><br>
                                </div>
                        </div>
                        
                        <br>
                        <br>
                        
                        <input class="gumbReg" id="gumbReg" name="obrazacRegistracija" type="submit" value="Prijavi se" />
                    </form>
                </div>
            </div>
        
<?php echo '<script'; ?>
>
        $("#korisnickoIme").keyup(function()
        {
        var korisnickoIme = $(this).val().trim();
        if(korisnickoIme !== ''){
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/provjeraKorIme.php',
                type: 'post',
                data: {
                    korisnickoIme : korisnickoIme
                    },
                success:function(poruka)
                        {
                            $('#korIme_poruka').html(poruka);
                        }
            });
        }else
        {
            $('#korIme_poruka').html("");
        }
        });
<?php echo '</script'; ?>
><?php }
}
