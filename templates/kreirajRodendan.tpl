<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
                {if isset($poruka)} 
                    <p>{$poruka}</p>
                {/if}
            </div>
            <h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>

            <div class="polozajObrazac">
                <div class="obrubObrazac" style="width: 500px; height: 400px">
                    
                    <form id="obrazac" class="obrazacForma" name="obrazac" method="post" action="{$smarty.server.PHP_SELF}">
                        <input class="gumb" name="rodendanDodaj" type="submit" value="Dodaj"/>
                        <br><br>
                            
                            <label for="nazivRodendana">Naziv rođendana:</label>
                            <input class="formaInput" type="text" id="nazivRodendana" name="nazivRodendana"/>
                            <br> <br>

                            <label for="opisRodendana">Opis rođendana: </label>
                            <textarea id="opisGrupe" name="opisRodendana" style="width: 100%; height: 150px"></textarea>
                            <br> <br>
                            <br>
                    </form>
                </div>
            </div>
