<script src="javascript/kmedenjak_pdf.js"></script>
<div id="greske" style="color:red">
                {if isset($greska)} 
                    <p>{$greska}</p>
                {/if}
            </div>
{html_image file='multimedija/Pozadina.jpg'}
{if isset($smarty.session.uloga) && $smarty.session.uloga < 2}
<h2 class="naslovUSadrzaju">{$pomak}</h2>
<div class="statistika">
    <div class="podaciStatistike">
        
        <form name="formaVrijeme", id="fromaVrijeme" method="post", action="">
            
             <p>Virtualno vrijeme: </p>
                <a target="_blank" href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html" style="text-decoration: none;">Postavi virtualno vrijeme</a>
                <p>Spremanje pomaka u XML</p><br>
            <input class="gumbPrikazi" name="postaviVrijeme" type="submit" value="Postavi"><br>
        </form>
        <br>    
    </div>
</div>
{/if}


<h2 class="naslovUSadrzaju">{$statistikaNaslov}</h2>
<div class="statistika">
    <div class="podaciStatistike" id="statistika">
        <form method="post" action="">
            <input class="gumbPrikazi" id="gumbPDF" name="gumbPDF" type="submit" value="PDF"><br>
        <table border=1 id="tablicaGrupa" style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ ROĐENDANDA PO GRUPI</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>NAZIV GRUPE</th>
            <th>BROJ ROĐENDANA</th>
        </tr>
        </thead>
        <tbody>
            {if !empty($redovi2)}
            {foreach $redovi2 as $red2}
                <tr>
                    <td>{$red2.naziv_grupe}</td>
                    <td>{$red2.brojRodendana}</td>
                </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
        </form>
    </div>
</div>
<br>
<br>

<h2 class="naslovUSadrzaju">{$rssNaslov}</h2>
<div class="statistika">
    <div class="podaciStatistike">
        
        
        <form method="post" action="">
        <input class="formaInput" style="width: 200px;" type="text" name="unosPretrage" placeholder="Pretraga...">
        <input type="submit" name="pretrazi" value="Pretraži" class="gumbPrikazi"><br><br>
        <p>Kliknite na ID grupe koju želite prikazati u RSS-u:</p>
        <table border=1 id="tablicaGrupa" style="background-color: white; color: #333">
        <caption style="font-size: 40px; color: #333;">PRIKAZ GRUPA</caption>
        <thead>
        <tr style="background-color: #333; color: #ccc;">
            <th>ID GRUPE</th>
            <th><a href="index.php?redSortiranja=naziv_grupe&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">NAZIV</a></th>
            <th><a href="index.php?redSortiranja=opis_grupe&&sortiranje={$sortiranje}" style="text-decoration: none; color: #ccc;">OPIS</a></th>
        </tr>
        </thead>
        <tbody>
            {if !empty($redovi1)}
            {foreach $redovi1 as $red1}
                <tr>
                    <td><a href="rss.php?id={$red1.grupa_id}">{$red1.grupa_id}</a></td>
                    <td>{$red1.naziv_grupe}</td>
                    <td>{$red1.opis_grupe}</td
                </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
        </form>
        <br>    
    </div>
</div>

 
<div class="statistika">
<div class="podaciStatistike">

<table border=1 id="tablicaGrupa" style="background-color: white; color: #333">
    <caption style="font-size: 40px; color: #333;">PRIKAZ PODATAKA</caption>
    <thead>
    <tr style="background-color: #333; color: #ccc;">
        <th>ID ROĐENDANA</th>
        <th>NAZIV</th>
        <th>IME PREZIME</th>
    </tr>
    </thead>
    <tbody>
        {foreach $redovi as $red}
            <tr>
                <td>{$red.rodendan_id}</td>
                <td>{$red.naziv_rodendana}</td>
                <td>{$red.ImePrezime}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
</div>
</div>



