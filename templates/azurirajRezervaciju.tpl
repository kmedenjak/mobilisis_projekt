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
                <div class="obrubObrazac" style="width: 500px; height: 700px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="{$smarty.server.PHP_SELF}">
                        <input class="gumb" name="rezervacijaAzuriraj" type="submit" value="Ažuriraj"/>
                        <br><br>
                        
                            <label for="moderatorGrupe"> Trenutna grupa: </label>
                            <br>
                            <input class="formaInput" name="grupa" type="text" value="{$naziv}" disabled>
                            <br> <br>
                            
                            <label>Odabir nove grupe (po želji):</label>
                            <select name="grupa">
                            {foreach from=$redovi item=grupa}
                                {html_options output=$grupa.naziv_grupe values=$grupa.grupa_id}
                            {/foreach}
                            </select>
                            <br><br>
                            
                            <label for="datumRezervacije">Unesite datum termina:</label>
                            <input class="formaInput" type="text" id="datumRezervacije" name="datumRezervacije" value="{$datum}"/>
                            <br> <br>

                            <label for="brojDjece">Unesite broj djece: </label>
                            <input class="formaInput" type="text" id="brojDjece" name="brojDjece" value="{$broj_djece}"/>
                            <br><br>
                            
                            <fieldset>
                                <legend>Popis sudionika rođendana</legend>
                                <input class="gumb" name="sudioniciDodaj" type="submit" value="Dodaj"/>
                            <br>
                            <textarea id="opisGrupe" name="imePrezime" style="width: 100%; height: 150px">{$sudionici}</textarea>
                            <br> <br>
                            </fieldset>
                            <br>
                    </form>
                </div>
            </div>