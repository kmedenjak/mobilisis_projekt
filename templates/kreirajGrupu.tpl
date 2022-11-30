<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
            </div>
            <img class="slikaPocetna" id="ikonaTeme" name="ikonaTeme" src="../multimedija/ikonaPristupacnosti.png" alt="ikona">
            <h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>

            <canvas id="pravokutnik" width="400" height="40"></canvas>
            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 420px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="{$smarty.server.PHP_SELF}">
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

