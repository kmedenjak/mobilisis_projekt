$(document).ready(function () {
    var a = Math.ceil(Math.random() * 9) + '';
    var b = Math.ceil(Math.random() * 9) + '';
    var c = Math.ceil(Math.random() * 9) + '';
    var d = Math.ceil(Math.random() * 9) + '';
    var e = Math.ceil(Math.random() * 9) + '';

    var broj = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = broj;
    document.getElementById("captchaBroj").innerHTML = broj;
});

window.addEventListener("load", checkform);
function checkform() {

    var gumb = document.getElementById("gumbReg");
    var captcha = document.getElementById("CaptchaInput");
    gumb.addEventListener("click", function ()
    {
        var unos = "";
        if (captcha.value === "") {
            unos = "Unesite CAPTCHA znakove\n";
            event.preventDefault();
        }
        if (captcha.value !== "") {
            if (ValidacijaCaptcha(captcha.value) === false) {
                unos = "Neispravni CAPTCHA znakovi\n";
                event.preventDefault();
            }
        }
        if (unos !== "") {
            alert(unos);
            event.preventDefault();
        }
    });
}

window.addEventListener("load", ValidacijaCaptcha);
function ValidacijaCaptcha() {
    var str1 = makniRazmak(document.getElementById('txtCaptcha').value);
    var str2 = makniRazmak(document.getElementById('CaptchaInput').value);
    if (str1 === str2) {
        return true;
    } else {
        return false;
    }
}

window.addEventListener("load", makniRazmak);
function makniRazmak(tekst) {
    return tekst.toString().trim();
}



