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
        <table border=1 style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ ROĐENDANA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID ROĐENDANA</th>
            <th><a href="?redSortiranja=naziv_rodendana&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">NAZIV</a></th>
            <th><a href="?redSortiranja=opis_rodendana&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">OPIS</a></th>
            <th><a href="?redSortiranja=zamjenski_termin&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">ZAMJENSKI TERMIN</a></th>
            <th>ID REZERVACIJE</th>
            <th><a href="?redSortiranja=ime&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">IME</a></th>
            <th><a href="?redSortiranja=prezime&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">PREZIME</a></th>
            <th>OTKAŽI</th>
        </tr>
        </thead>
        <tbody>
            {if !empty($redovi)}
            {foreach $redovi as $red}
                <tr>
                    <td><a href="obrasci/azurirajRodendan.php?id={$red.rodendan_id}">{$red.rodendan_id}</a></td>
                    <td>{$red.naziv_rodendana}</td>
                    <td>{$red.opis_rodendana}</td>
                    <td>{$red.zamjenski_termin}</td>
                    <td>{$red.rezervacija_id}</td>
                    <td>{$red.ime}</td>
                    <td>{$red.prezime}</td>
                    <td><a class="gumb" style="margin: 2px; padding: 5px;text-decoration: none;" href="{$putanja}/obrasci/zamjenskiTermin.php?a={$red.rezervacija_id}">OTKAŽI</a></td>
                </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
        </form>
        <br>    
    </div>
</div>

