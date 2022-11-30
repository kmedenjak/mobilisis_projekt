<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
                {if isset($poruka)} 
                    <p>{$poruka}</p>
                {/if}
            </div>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 420px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="{$smarty.server.PHP_SELF}">
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
                            {foreach from=$redovi item=grupa}
                                {html_options output=$grupa.naziv_grupe values=$grupa.grupa_id}
                            {/foreach}
                            </select>
                            <br><br>
                            <label>Odabir moderatora:</label>
                            <select name="moderator">
                            {foreach from=$redovi item=moderator}
                                {html_options output=$moderator.prezime values=$moderator.korisnik_id}
                            {/foreach}
                            </select>
                    </form>
                </div>
            </div>


