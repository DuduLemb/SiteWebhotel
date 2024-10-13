$(document).ready(function () {

    $("#valider").click(function(){

    var a = $("#nom").val();
    var b = $("#prenom").val();
    var c = $("#email").val();
    var d = $("#telephone").val();
    var e = $("#typerese").val();
    var f = $("#nombrechambre").val();
    var g = $("#nombrepersonne").val();
    var h = $("#arrive").val();
    var i = $("#depart").val();
    var j = $("#info").val();

    $.ajax({
        type: "GET",
        url: "admajoutrese.php",
        data:{
            nom:a,
            prenom:b,
            email:c,
            telephone:d,
            typerese:e,
            nombrechambre:f,
            nombrepersonne:g,
            arrive:h,
            depart:i,
            info:j,
        },
        dataType: "dataType"

    });
    //alert("enregistrement reussi");
       
    });
});




