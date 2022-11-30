$(document).ready(function () {
    var gumbPdf = document.getElementById("gumbPDF");
     gumbPdf.addEventListener("click", function (event) {

        kreirajPdf();
    });
    
    function kreirajPdf(){
        var pdf = document.getElementById("statistika");
        newWin = window.open("");
        newWin.document.write(pdf.outerHTML);
        newWin.print();
        newWin.close();
    }

});

