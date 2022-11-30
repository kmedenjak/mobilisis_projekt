<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
            </div>
<h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>
<div class="statistika">
    <div class="podaciStatistike">
        <form method="post" action="">
        <input class="formaInput" style="width: 200px;" type="text" name="unosPretrage" placeholder="Pretraga...">
        <input type="submit" name="pretrazi" value="Pretraži" class="gumbPrikazi"><br><br>
        <p>Kliknite na ID grupe koju želite ažurirati:</p>
        <table border=1 style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ GRUPA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID GRUPE</th>
            <th><a href="rodendan.php?redSortiranja=naziv_grupe&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">NAZIV</a></th>
            <th><a href="rodendan.php?redSortiranja=opis_grupe&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">OPIS</a></th>
        </tr>
        </thead>
        <tbody>
            {if !empty($redovi)}
            {foreach $redovi as $red}
                <tr>
                    <td><a href="{$putanja}/prikazRezervacija.php?id={$red.grupa_id}">{$red.grupa_id}</a></td>
                    <td>{$red.naziv_grupe}</td>
                    <td>{$red.opis_grupe}</td>
                </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
        </form>
        <br>    
    </div>
</div>

