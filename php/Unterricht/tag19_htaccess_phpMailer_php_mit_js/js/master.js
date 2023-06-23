jQuery(document).ready(function() {

  $("#user").change(function(){
    //alert("change funktioniert");
  
    //auf den Wert vom select(option->value) zugreifen
    //den Wert vom select in einer Variable rein tun
    let value = $(this).val();
    //alert(value);
    if(value === "") {
      //$("#userDaten").text("Bitte einen User auswählen");
      $("#userDaten").removeClass("alert alert-light").text("");
    } else {
      //$("#userDaten").addClass("alert alert-light").html(value);
  
      $.ajax({
        //geh zu detail.php
        url: "auth/user/detail.php",
        //wenn type: "post" => $_POST['id']
        //ähnlich wie in <form method="post">
        
        //wenn type: "get" => $_GET['id']
        //ähnlich wie in <form method="get">
        type: "post",
        dataType: "text",
        data: "id=" + value
      })
      .done(function(data){
        $("#userDaten").addClass("alert alert-light").html(data);
      })
      .fail(function(){
        $("#userDaten").text("Datei detail.php nicht gefunden");
      });
  
    }//ende else
  
  });//ende change
  //#########################################################################
  $(".user").click(function(event){
    event.preventDefault();
  
    //alert("klick funktioniert");
    //let idValue = $(this).attr("id");
    //alert(idValue);
    let id = this.id;
    console.log(id);
  
    //id="name-1" oder id="motto-1"
    //den Wert teilen
    //Ergebnis ist: ["name", "1"] oder ["motto", "1"]
    let teileId = id.split("-");
    console.log(teileId);
  
    let feldName = teileId[0];
    let idValue = teileId[1];
    console.log(feldName);
    console.log(idValue);
    console.log(teileId[0]);
    //+++++++++++++++++++++
    $.ajax({
      //geh zu profil.php
      url: "auth/user/detail.php",
      type: "post",
      dataType: "text",
      data: "id=" + idValue
    })
    .done(function(data){
      $("#userDetail").addClass("alert alert-light").html(data);
    })
    .fail(function(){
      $("#userDetail").text("Datei profil.php nicht gefunden");
    });
    //+++++++++++++++++++++
  });//ende click
  
  $("#userDetail").click(function(event){
    $(this).removeClass("alert alert-light").text("");
  });
  //#########################################################################
  $(".edit").click(function(){
    $(this).addClass("editMode");
  });
  
  $(".edit").focusout(function(){
   $(this).removeClass("editMode");
  
   let id = this.id;
   console.log(id);
  
   //id="name-1" oder id="motto-1"
   //den Wert teilen
   //Ergebnis ist: ["name", "1"] oder ["motto", "1"]
   let teileId = id.split("-");
   console.log(teileId);
  
   //einzelne Werte vom array in Variablen rein tun
   let feldName = teileId[0];
   let feldId = teileId[1];
   console.log(feldName);
   console.log(feldId);
   console.log(teileId[0]);
  
   //der Wert, der aktuell im Bereich steht
   let value = $(this).text();
   console.log(value);
  
   //mit welcher Datei wird kommuniziert?
   //methode ist post
   //welche Daten sollen zu update.php gesendet werden
   $.ajax({
    url: "auth/user/update_js.php",
    type: "post",
    dataType: "text",
    data: {benutzerName: feldName, benutzerWert: value, benutzerId: feldId},
    success: function(){
      //window.location.href = window.location.href
      location.reload()
    }
   });//ende $.ajax
  
  });//ende focusout
  
  
  });//ende ready
  
/*
  $.ajax() -> führt eine asynchrone http-Anfrage durch
  
  .done() -> fügt einen Handler hinzu, der aufgerufen werden soll, wenn das Deferred-Objekt aufgelöst wird.
  (ausführen wenn die Datei gefunden wird)
  
  .fail() ->
  füge einen Handler hinzu, der aufgerufen werden sollen, wenn das zurückgestellte Objekt abgelehnt wird.
  (Meldung ausgeben wenn die Datei nicht gefunden wird)
  
  $.get() -> führt eine asynchrone http-Anfrage unter der verwendung  der HTTP-Methode GET durch

  $.post() -> führt eine asynchrone http-Anfrage unter der verwendung  der HTTP-Methode POST durch
*/