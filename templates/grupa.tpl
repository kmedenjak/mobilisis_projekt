<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
            </div>
<h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>
<div class="statistika">
    <div class="podaciStatistike">
        <a class="gumb" style="width: 150px; text-decoration: none;" name="grupaDodjela" href="{$putanja}/obrasci/dodjelaModeratora.php">Dodjela moderatora</a>
        <a class="gumb" style="width: 100px; text-decoration: none;" name="kreirajGrupu" href="{$putanja}/obrasci/kreirajGrupu.php">Kreiraj grupu</a>
        <form method="post" action="">
        <input class="formaInput" style="width: 200px;" type="text" name="unosPretrage" placeholder="Pretraga...">
        <input type="submit" name="pretrazi" value="Pretraži" class="gumbPrikazi"><br><br>
        <p>Kliknite na ID grupe koju želite ažurirati:</p>
        <table border=1 style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ GRUPA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID GRUPE</th>
            <th><a href="grupa.php?redSortiranja=naziv_grupe&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">NAZIV</a></th>
            <th><a href="grupa.php?redSortiranja=opis_grupe&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">OPIS</a></th>
        </tr>
        </thead>
        <tbody>
            {if !empty($redovi)}
            {foreach $redovi as $red}
                <tr>
                    <td><a href="obrasci/azurirajGrupu.php?id={$red.grupa_id}">{$red.grupa_id}</a></td>
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
