$(document).ready(function () {
    naslov = $(document).find("title").text();
    switch (naslov) {
        case "Kreiraj rezervaciju":
            window.addEventListener("load", pravokutnikPomocKreirajRezervaciju);
            pravokutnikPomocKreirajRezervaciju();
            break;
        case "Prijava":
            window.addEventListener("load", pravokutnikPomocPrijava);
            pravokutnikPomocPrijava();
            break;
        case "Kreiraj grupu":
            window.addEventListener("load", pravokutnikPomocKreirajGrupu);
            pravokutnikPomocKreirajGrupu();
            break;
    }
});


function popUp()
{
    var gumb = document.getElementById("pravokutnik5");
    gumb.addEventListener("click", function ()
    {
        if (confirm("Trebate li pomoć?") === true)
        {
            console.log("nekaj");
        }
    });
}

function pravokutnikPomocPrijava() {
    var platno = document.getElementById("pravokutnik");
    var platno2 = document.getElementById("pravokutnik2");
    var platno3 = document.getElementById("pravokutnik3");
    var platno4 = document.getElementById("pravokutnik4");
    var platno5 = document.getElementById("pravokutnik5");
    var sadrzaj = platno.getContext("2d");
    var sadrzaj2 = platno2.getContext("2d");
    var sadrzaj3 = platno3.getContext("2d");
    var sadrzaj4 = platno4.getContext("2d");
    var sadrzaj5 = platno5.getContext("2d");
    platno.hidden = false;
    platno2.hidden = true;
    platno3.hidden = true;
    platno4.hidden = true;
    platno5.hidden = true;
    platno.style.top = "25%";
    platno.style.left = "1%";
    sadrzaj.beginPath();
    sadrzaj.rect(0, 0, 400, 40);
    sadrzaj.font = '15px Arial';
    sadrzaj.shadowOffsetX = 20;
    sadrzaj.fillText('Kliknite ovdje za pomoć', 20, 25);
    sadrzaj.stroke();
    platno.addEventListener("click", function ()
    {
        platno.hidden = true;
        platno2.hidden = false;
        platno3.hidden = true;
        platno4.hidden = true;
        platno5.hidden = true;
        sadrzaj2.clearRect(0, 0, platno.width, platno.height);
        platno2.style.top = "32%";
        platno2.style.left = "62%";
        sadrzaj2.beginPath();
        sadrzaj2.font = '15px Arial';
        sadrzaj2.fillText('Unosite svoje korisničko ime', 20, 25);
        sadrzaj2.stroke();
        platno2.addEventListener("click", function ()
        {
            platno.hidden = true;
            platno2.hidden = true;
            platno3.hidden = false;
            platno4.hidden = true;
            platno5.hidden = true;
            sadrzaj3.clearRect(0, 0, platno.width, platno.height);
            platno3.style.top = "42%";
            platno3.style.left = "62%";
            sadrzaj3.beginPath();
            sadrzaj3.font = '15px Arial';
            sadrzaj3.fillText('Unosite svoju lozinku', 20, 25);
            sadrzaj3.stroke();
            platno3.addEventListener("click", function ()
            {
                platno.hidden = true;
                platno2.hidden = true;
                platno3.hidden = true;
                platno4.hidden = false;
                platno5.hidden = true;
                sadrzaj4.clearRect(0, 0, platno.width, platno.height);
                platno4.style.top = "50%";
                platno4.style.left = "17%";
                sadrzaj4.beginPath();
                sadrzaj4.font = '15px Arial';
                sadrzaj4.fillText('Kliknite kako bi se korisničko ime spremilo', 20, 25);
                sadrzaj4.stroke();
                platno4.addEventListener("click", function () {
                    platno.hidden = true;
                    platno2.hidden = true;
                    platno3.hidden = true;
                    platno4.hidden = true;
                    platno5.hidden = false;
                    sadrzaj5.clearRect(0, 0, platno.width, platno.height);
                    platno5.style.top = "54%";
                    platno5.style.left = "62%";
                    sadrzaj5.beginPath();
                    sadrzaj5.font = '15px Arial';
                    sadrzaj5.fillText('Kliknite na gumb "Prijava"', 20, 25);
                    sadrzaj5.stroke();
                    platno5.addEventListener("click", function () {
                        platno.hidden = true;
                        platno2.hidden = true;
                        platno3.hidden = true;
                        platno4.hidden = true;
                        platno5.hidden = true;
                    });
                });
            });
        });
    });
}


function pravokutnikPomocKreirajRezervaciju() {
    var platno = document.getElementById("pravokutnik");
    var platno2 = document.getElementById("pravokutnik2");
    var platno3 = document.getElementById("pravokutnik3");
    var platno4 = document.getElementById("pravokutnik4");
    var platno5 = document.getElementById("pravokutnik5");
    var platno6 = document.getElementById("pravokutnik6");
    var sadrzaj = platno.getContext("2d");
    var sadrzaj2 = platno2.getContext("2d");
    var sadrzaj3 = platno3.getContext("2d");
    var sadrzaj4 = platno4.getContext("2d");
    var sadrzaj5 = platno5.getContext("2d");
    var sadrzaj6 = platno6.getContext("2d");
    platno.hidden = false;
    platno2.hidden = true;
    platno3.hidden = true;
    platno4.hidden = true;
    platno5.hidden = true;
    platno6.hidden = true;
    platno.style.top = "23%";
    platno.style.left = "1%";
    sadrzaj.beginPath();
    sadrzaj.rect(0, 0, 400, 40);
    sadrzaj.font = '15px Arial';
    sadrzaj.shadowOffsetX = 20;
    sadrzaj.fillText('Kliknite ovdje za pomoć', 20, 25);
    sadrzaj.stroke();
    platno.addEventListener("click", function ()
    {
        platno.hidden = true;
        platno2.hidden = false;
        platno3.hidden = true;
        platno4.hidden = true;
        platno5.hidden = true;
        platno6.hidden = true;
        sadrzaj2.clearRect(0, 0, platno.width, platno.height);
        platno2.style.top = "82%";
        platno2.style.left = "62%";
        sadrzaj2.beginPath();
        sadrzaj2.font = '15px Arial';
        sadrzaj2.fillText('Upišite sudionike i klinite na gumb "DODAJ"', 20, 25);
        sadrzaj2.stroke();
        platno2.addEventListener("click", function ()
        {
            platno.hidden = true;
            platno2.hidden = true;
            platno3.hidden = false;
            platno4.hidden = true;
            platno5.hidden = true;
            platno6.hidden = true;
            sadrzaj3.clearRect(0, 0, platno.width, platno.height);
            platno3.style.top = "52%";
            platno3.style.left = "17%";
            sadrzaj3.beginPath();
            sadrzaj3.font = '15px Arial';
            sadrzaj3.fillText('Odaberite grupu iz padajućeg izbornika', 20, 25);
            sadrzaj3.stroke();
            platno3.addEventListener("click", function ()
            {
                platno.hidden = true;
                platno2.hidden = true;
                platno3.hidden = true;
                platno4.hidden = false;
                platno5.hidden = true;
                platno6.hidden = true;
                sadrzaj4.clearRect(0, 0, platno.width, platno.height);
                platno4.style.top = "60%";
                platno4.style.left = "17%";
                sadrzaj4.beginPath();
                sadrzaj4.font = '15px Arial';
                sadrzaj4.fillText('Format datuma: dd.mm.gggg. hh:mm:ss', 20, 25);
                sadrzaj4.stroke();
                platno4.addEventListener("click", function () {
                    platno.hidden = true;
                    platno2.hidden = true;
                    platno3.hidden = true;
                    platno4.hidden = true;
                    platno5.hidden = false;
                    platno6.hidden = true;
                    sadrzaj5.clearRect(0, 0, platno.width, platno.height);
                    platno5.style.top = "72%";
                    platno5.style.left = "62%";
                    sadrzaj5.beginPath();
                    sadrzaj5.font = '15px Arial';
                    sadrzaj5.fillText('Unesite broj djece na rođendanu', 20, 25);
                    sadrzaj5.stroke();
                    platno5.addEventListener("click", function () {
                        platno.hidden = true;
                        platno2.hidden = true;
                        platno3.hidden = true;
                        platno4.hidden = true;
                        platno5.hidden = true;
                        platno6.hidden = false;
                        sadrzaj6.clearRect(0, 0, platno.width, platno.height);
                        platno6.style.top = "50%";
                        platno6.style.left = "62%";
                        sadrzaj6.beginPath();
                        sadrzaj6.font = '15px Arial';
                        sadrzaj6.fillText('Kliknite na gumb "DODAJ"', 20, 25);
                        sadrzaj6.stroke();
                        platno6.addEventListener("click", function () {
                            platno.hidden = true;
                            platno2.hidden = true;
                            platno3.hidden = true;
                            platno4.hidden = true;
                            platno5.hidden = true;
                            platno6.hidden = true;
                        });
                    });
                });
            });
        });
    });
}


function pravokutnikPomocKreirajGrupu() {
    var platno = document.getElementById("pravokutnik");
    var platno2 = document.getElementById("pravokutnik2");
    var platno3 = document.getElementById("pravokutnik3");
    var platno4 = document.getElementById("pravokutnik4");
    var sadrzaj = platno.getContext("2d");
    var sadrzaj2 = platno2.getContext("2d");
    var sadrzaj3 = platno3.getContext("2d");
    var sadrzaj4 = platno4.getContext("2d");
    platno.hidden = false;
    platno2.hidden = true;
    platno3.hidden = true;
    platno4.hidden = true;
    platno.style.top = "22%";
    platno.style.left = "1%";
    sadrzaj.beginPath();
    sadrzaj.rect(0, 0, 400, 40);
    sadrzaj.font = '15px Arial';
    sadrzaj.shadowOffsetX = 20;
    sadrzaj.fillText('Kliknite ovdje za pomoć', 20, 25);
    sadrzaj.stroke();
    platno.addEventListener("click", function ()
    {
        platno.hidden = true;
        platno2.hidden = false;
        platno3.hidden = true;
        platno4.hidden = true;
        sadrzaj2.clearRect(0, 0, platno.width, platno.height);
        platno2.style.top = "55%";
        platno2.style.left = "62%";
        sadrzaj2.beginPath();
        sadrzaj2.font = '15px Arial';
        sadrzaj2.fillText('Unosite naziv grupe', 20, 25);
        sadrzaj2.stroke();
        platno2.addEventListener("click", function ()
        {
            platno.hidden = true;
            platno2.hidden = true;
            platno3.hidden = false;
            platno4.hidden = true;
            sadrzaj3.clearRect(0, 0, platno.width, platno.height);
            platno3.style.top = "65%";
            platno3.style.left = "62%";
            sadrzaj3.beginPath();
            sadrzaj3.font = '15px Arial';
            sadrzaj3.fillText('Unosite opis grupe', 20, 25);
            sadrzaj3.stroke();
            platno3.addEventListener("click", function ()
            {
                platno.hidden = true;
                platno2.hidden = true;
                platno3.hidden = true;
                platno4.hidden = false;
                sadrzaj4.clearRect(0, 0, platno.width, platno.height);
                platno4.style.top = "45%";
                platno4.style.left = "62%";
                sadrzaj4.beginPath();
                sadrzaj4.font = '15px Arial';
                sadrzaj4.fillText('Kliknite kako bi se spremila nova grupa', 20, 25);
                sadrzaj4.stroke();
                platno4.addEventListener("click", function () {
                    platno.hidden = true;
                    platno2.hidden = true;
                    platno3.hidden = true;
                    platno4.hidden = true;
                });
            });
        });
    });
}