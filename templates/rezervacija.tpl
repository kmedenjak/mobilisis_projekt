<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}

            </div>
<h2 class="naslovUSadrzaju">{$drugiNaslov}</h2>
<div class="statistika">
    <div class="podaciStatistike">
        <a class="gumb" style="width: 130px; text-decoration: none;" name="kreirajRezervaciju" href="{$putanja}/obrasci/kreirajRezervaciju.php">Kreiraj rezervaciju</a>
        <p>Kliknite na ID rezervacije koju želite ažurirati:</p>
        <table border=1 style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ REZERVACIJA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <td>ID REZERVACIJE</td>
            <td>BROJ DJECE</td>
            <td>DATUM</td>
            <td>STATUS</td>
            <td>SUDIONICI</td>
            <td>GRUPA</td>
            <td>OPIS GRUPE</td>
            <td>OBRIŠI</td>
        </tr>
        </thead>
        <tbody>
            {if !empty($redovi)}
            {foreach $redovi as $red}
                <tr>
                    <td><a href="obrasci/azurirajRezervaciju.php?id={$red.rezervacija_id}">{$red.rezervacija_id}</a></td>
                    <td>{$red.broj_djece}</td>
                    <td>{$red.datum}</td>
                    <td>{$red.status}</td>
                    <td>{$red.ImePrezime}</td>
                    <td>{$red.naziv_grupe}</td>
                    <td>{$red.opis_grupe}</td>
                    <td><a class="gumb" style="margin: 2px; padding: 5px;text-decoration: none;" href="{$putanja}/obrisiRezervaciju.php?a={$red.rezervacija_id}">OBRIŠI</a></td>
                </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
        <br>    
    </div>
</div>
