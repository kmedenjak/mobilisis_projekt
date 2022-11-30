<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}

            </div>
            <div id="poruka" style="color:green">
                {if isset($poruka)} 
                    <p>{$poruka}</p>
                {/if}
            </div>
            <canvas id="pravokutnik" width="400" height="40"></canvas>
            <div class="polozajPrijava">
                <div class="obrubPrijava" style="height: 400px">
                    <form class="prijavaForma" name="prijava" id="prijava" method="post" action="{$smarty.server.PHP_SELF}">

                        <canvas id="pravokutnik2" width="400" height="40"></canvas>
                        <label for="korisnickoIme">Korisničko ime: </label>
                        <input class="formaInput" name="korisnickoIme" id="korisnickoIme" type="text" value="{$korisnik}" />
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
