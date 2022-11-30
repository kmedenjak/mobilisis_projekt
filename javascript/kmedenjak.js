window.addEventListener("load", provjeraIspravnosti);
function provjeraIspravnosti()
{
    //var labelaTel = document.getElementById("labelaTel");
    var labelaPrezime = document.getElementById("labelaPrezime");
    var labelaGodina = document.getElementById("labelaGodina");
    var labelaPostanskiBroj = document.getElementById("labelaPostanskiBroj");
    var labelaSpol = document.getElementById("labelaSpol");
    var gumb = document.getElementById("gumbReg");

    gumb.addEventListener("click", function (event) {

        if (!provjeraPrezime())
        {
            labelaPrezime.innerHTML = "* Prezime:";
            labelaPrezime.style.color = "red";
            event.preventDefault();
        } else
        {
            labelaPrezime.innerHTML = "Prezime:";
            labelaPrezime.style.color = "green";
        }

        /*if (!provjeraTel())
        {
            labelaTel.innerHTML = "* Telefonski broj:";
            labelaTel.style.color = "red";
            event.preventDefault();
        } else
        {
            labelaTel.innerHTML = "Telefonski broj:";
            labelaTel.style.color = "green";
        }*/

        if (!provjeraGodina())
        {

            labelaGodina.innerHTML = "* Godina rodenja:";
            labelaGodina.style.color = "red";
            event.preventDefault();
        } else
        {
            labelaGodina.innerHTML = "Godina rodenja:";
            labelaGodina.style.color = "green";
        }
        
        if (!provjeraPostanskiBroj())
        {

            labelaPostanskiBroj.innerHTML = "* Poštanski broj:";
            labelaPostanskiBroj.style.color = "red";
            event.preventDefault();
        } else
        {
            labelaPostanskiBroj.innerHTML = "Poštanski broj:";
            labelaPostanskiBroj.style.color = "green";
        }
        
        if (!provjeraRadioSpol())
        {

            labelaSpol.innerHTML = "* Spol:";
            labelaSpol.style.color = "red";
            event.preventDefault();
        } else
        {
            labelaSpol.innerHTML = "Spol:";
            labelaSpol.style.color = "green";
        }
    });
}

/*window.addEventListener("load", provjeraTel);
function provjeraTel()
{
    var telefonskiBroj = document.getElementById("kontakt").value;
    var regExTel = '/^([+]([0-9]{1,13})$)|([0]{1})([0-9]{1,10})$/';
    var rezultat = telefonskiBroj.match(regExTel);
        if (!rezultat)
        {
            return false;
        } else
        {
            return true;
        }
}*/


window.addEventListener("load", provjeraPrezime);
function provjeraPrezime()
{
    var prezime = document.getElementById("prezime").value;
    if (prezime === "") {
        return false;
    } else {
        if (!(prezime.charAt(0) === prezime.charAt(0).toUpperCase()))
        {
            console.log("nekaj");
            return false;
        } else
        {
            return true;
        }
    }
}

window.addEventListener("load", provjeraGodina);
function provjeraGodina()
{
    var godina = document.getElementById("godina").value;
    if ((godina < 1900 && godina > 2004) || godina === "") {
        return false;
    } else {
        return true;
    }
}


window.addEventListener("load", provjeraPostanskiBroj);
function provjeraPostanskiBroj()
{
    var postanskiBroj = document.getElementById("postanskiBroj");
    if (postanskiBroj === "") {
        return false;
    } else {
        if (postanskiBroj.value[0] <= 9 && postanskiBroj.value[1] <= 9 && postanskiBroj.value[2] <= 9 && postanskiBroj.value[3] <= 9  && postanskiBroj.value[4] <= 9)
        {
            if(postanskiBroj.value.length === 5){
                return true;
            }
        } else
        {
            return false;
        }
    }
}


window.addEventListener("load", provjeraRadioSpol);
function provjeraRadioSpol()
{
    var spol = document.querySelector('input[name="spol"]:checked');
    if(spol !== null){
        return true;
    }else{
        return false;
    }
}

/*window.addEventListener("load", zamjena);
function zamjena()
{
    var ikona = document.getElementById("ikonaTeme");
    var tema = document.getElementById("prvaTema");

    ikona.addEventListener("click", function ()
    {
        if (tema.getAttribute("href") === "../css/kmedenjak.css")
        {

            tema.href = "../css/kmedenjak_accesibility.css";
        } else
        {
            tema.href = "../css/kmedenjak.css";
        }
    });
}*/





