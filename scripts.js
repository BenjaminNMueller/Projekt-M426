$(document).ready(function(){
    $.getJSON("http://localhost/Modul426/data.php", (zitat) => {
            $(".quote").text(zitat.quote);
            $(".author").text(zitat.firstName + " " + zitat.lastName);
    });
    
    setInterval(function(){
        $.getJSON("http://localhost/Modul426/data.php", (zitat) => {
            $(".quote").text(zitat.quote);
            $(".author").text(zitat.firstName + " " + zitat.lastName);
        });
    }, 5000);
})