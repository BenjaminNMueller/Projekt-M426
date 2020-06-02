$(document).ready(function(){
    setInterval(function(){
        $.getJSON("http://localhost/Modul426/data.php", (zitat) => {
            $(".quote").text(zitat.quote);
            $(".author").text(zitat.author);
        });
    }, 5000);
})