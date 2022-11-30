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
                <div class="obrubObrazac" style="width: 500px; height: 650px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="{$smarty.server.PHP_SELF}">
                        <input class="gumb" name="grupaAzuriraj" type="submit" value="Ažuriraj"/>
                        <br><br>
                        <br>
                        <br>
                           
                            <label for="nazivGrupe" id="labela">Naziv grupe: </label>
                            <input class="formaInput" name="nazivGrupe" type="text" value="{$naziv}">
                            <br> <br>
                            <span id="greske" style="color: red;"></span>
                            <label id="labela5" for="opisGrupe"> Opis grupe: </label>
                            <br><br>
                            <textarea id="opisGrupe" name="opisGrupe" style="width: 100%; height: 150px">{$opis}</textarea>
                            <br> <br>
                            
                            <label id="labela5" for="moderatorGrupe"> Moderator grupe: </label>
                            <br>
                            <input class="formaInput" name="moderatorGrupe" type="text" value="{$moderator}" disabled>
                            <br> <br>

                    </form>
                </div>
            </div>
