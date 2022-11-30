<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
            </div>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 300px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="{$smarty.server.PHP_SELF}">
                        <input class="gumb" name="terminDodaj" type="submit" value="Dodaj"/>
                        <br><br>
                        <br>
                        <br>
                            <label for="terminStari" id="labela">Stari termin: </label>
                            <input class="formaInput" name="terminStari" type="text" value="{$datum}">
                            <br> <br>
                        
                            <label for="teminNovi" id="labela">Novi termin: </label>
                            <input class="formaInput" name="nazivNovi" type="text">
                            <br> <br>

                    </form>

                </div>
            </div>


