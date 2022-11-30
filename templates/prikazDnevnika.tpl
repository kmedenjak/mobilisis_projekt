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
        <caption style="font-size: 40px; color: #333;">PRIKAZ GRUPA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID DNEVNIKA</th>
            <th><a href="?redSortiranja=radnja&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">RADNJA</a></th>
            <th><a href="?redSortiranja=upit&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">UPIT</a></th>
            <th><a href="?redSortiranja=datum_vrijeme&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">DATUM I VRIJEME</a></th>
            <th><a href="?redSortiranja=ime&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">IME</a></th>
            <th><a href="?redSortiranja=prezime&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">PREZIME</a></th>
            <th><a href="?redSortiranja=naziv_tipa&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">NAZIV TIPA</a></th>
            <th><a href="?redSortiranja=opis_tipa&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">OPIS TIPA</a></th>
        </tr>
        </thead>
        <tbody>
            {if !empty($redovi)}
            {foreach $redovi as $red}
                <tr>
                    <td>{$red.dnevnik_id}</td>
                    <td>{$red.radnja}</td>
                    <td>{$red.upit}</td>
                    <td>{$red.datum_vrijeme}</td>
                    <td>{$red.ime}</td>
                    <td>{$red.prezime}</td>
                    <td>{$red.naziv_tipa}</td>
                    <td>{$red.opis_tipa}</td>
                </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
        </form>
        <br>    
    </div>
</div>

