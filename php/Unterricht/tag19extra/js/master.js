// jQuery(document).ready(function() {
$(document).ready(function() {
    $("#user").change(function(){
        let value = $(this).val();
        //alert(value);

        if (value === "") {
            $("#userDaten").removeClass("alert alert-light").text("");
        }
        else{
            // $("#userDaten").addClass("alert alert-light").html(value);
            //----------------------------------------------------------
            // jQuery.ajax();
            $.ajax({
                url: "auth/user/detail.php",
                type: "post",
                dataType:  "text",
                data: "id=" + value
            })
            .done(function(data){
                $("#userDaten").addClass("alert alert-light").html(data);
            })
            .fail(function(){
                $("#userDaten").text("Datei detail.php nicht gefunden");
            });

        }
    }); //ende change

    $('.edit').focusout(function(){
        let id = this.id;
        console.log(id);
        let teileId = id.split("-");
        
        let feldName = teileId[0];
        let feldId = teileId[1];
        
        let value = $(this).text();
        console.log(value);

        $.ajax({
            url: "auth/user/update_js.php",
            type: "post",
            dataType:  "text",
            data: {benutzerName: feldName, benutzerWert: value, benutzerId: feldId}
        });
    });
}); //ende ready