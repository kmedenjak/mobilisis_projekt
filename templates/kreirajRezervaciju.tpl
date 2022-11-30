<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
                {if isset($poruka)} 
                    <p>{$poruka}</p>
                {/if}
            </div>
            
            <canvas id="pravokutnik" width="400" height="40"></canvas>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 570px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="{$smarty.server.PHP_SELF}">
                        <input class="gumb" name="rezervacijaDodaj" type="submit" value="Dodaj"/>
                        <br><br>
                        
                            <canvas id="pravokutnik2" width="400" height="40"></canvas>
                            <label>Odabir grupe:</label>
                            <select name="grupa">
                            {foreach from=$redovi item=grupa}
                                {html_options output=$grupa.naziv_grupe values=$grupa.grupa_id}
                            {/foreach}
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
            </div>