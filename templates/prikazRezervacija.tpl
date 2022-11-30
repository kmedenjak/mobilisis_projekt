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
        <caption style="font-size: 40px; color: #333;">PRIKAZ REZERVACIJA</caption>
        <thead>
            <th>ID REZERVACIJE</th>
            <th><a href="prikazRezervacija.php?redSortiranja=broj_djece&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">BROJ DJECE</a></th>
            <th><a href="prikazRezervacija.php?redSortiranja=datum&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">DATUM</a></th>
            <th><a href="prikazRezervacija.php?redSortiranja=status&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">STATUS</a></th>
            <th>SUDIONICI</th>
            <th>GRUPA</th>
            <th>OPIS GRUPE</th>
            <th>POTVRDI</th>
            <th>ODBIJ</th>
        </thead>
        <tbody>
            {if !empty($redovi)}
            {foreach $redovi as $red}
                <tr>
                    <td>{$red.rezervacija_id}</td>
                    <td>{$red.broj_djece}</td>
                    <td class="datum">{$red.datum}</td>
                    <td class="status">{$red.status}</td>
                    <td>{$red.ImePrezime}</td>
                    <td>{$red.naziv_grupe}</td>
                    <td>{$red.opis_grupe}</td>
                    <td><a class="gumb" style="margin: 2px; padding: 5px;text-decoration: none;" href="{$putanja}/potvrdiRezervaciju.php?a={$red.rezervacija_id}">POTVRDI</a></td>
                    <td><a class="gumb" id="gumbOdbij" style="margin: 2px; padding: 5px;text-decoration: none;" href="{$putanja}/odbijRezervaciju.php?a={$red.rezervacija_id}">ODBIJ</a></td>
                </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
        </form>
        <br>    
    </div>
</div>
        
<script>
    datum = document.getElementsByClassName("datum");
    for(i=0; i<datum.length; i++){ 
        for(j=0; j<i; j++){
            if(datum[i].innerHTML === datum[j].innerHTML){
                datum[i].style.backgroundColor = "#e69595";
                datum[j].style.backgroundColor = "#e69595";
            }
        }
    }
</script>
