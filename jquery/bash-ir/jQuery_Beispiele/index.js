"use strict"; 

$(document).ready(function(){
  //function für Anweisung
//##########################################################
  $(".heading h2")
  .first()
  .next()
  .next()
  .next()
  .css("color", "#f00");
//##########################################################
// $(".box1 p:first").css("background-color", "#ffc");
// $(".box1 p:last").css("background-color", "#fff");

// $(".box1 p:odd").css("background-color", "#ffc");
// $(".box1 p:even").css("background-color", "#fff");

// $(".box1 p:lang(en)").css("background-color", "#cd0000");
$(".box1 p:lang(de)").css("background-color", "#999");
//##########################################################
/*
	mit animate() kann man css-Eigenschaften animieren, die
	px, em oder % entgegennehmen
	animate(Wert1-CSS, Wert2-Geschwindigkeit)
  height: show, hide, toggle, px, em, %
*/
$(".box2 div").hide();

$(".box2 h2").click(function(){
  //$(this).next().fadeToggle().css("background-color","#efefef");
  /* $(this)
    .toggleClass("current")
      .next()
        .fadeToggle()
          .css("background-color","#efefef");

  $(this).next().fadeToggle();
  $(this).toggleClass("current");
  */
  //show, hide, toggle
  $(this).next().animate({"height":"toggle"},1000);
});
//##########################################################
$(".gallery-item").click(function(event){
  event.preventDefault();
  //div im HTML erstellen als Overlay für ein größeres Bild
  //let overlay = jQuery.parseHTML("<div id='overlay'></div>");
  let overlay = $.parseHTML("<div id='overlay'></div>");
  //div im über body Element erstellen 
  $("body").append(overlay);
  /*
  <a href="../images/big/bild-05.jpg">
    <img src="../images/small/bild-05.jpg" alt="Landschaft" class="gallery-item" />
  </a>
  */

  // image definieren in variable
  let image = $.parseHTML("<img id='overlay-image'/>");
  // href definieren in variable
  let href = $(this).parent().attr("href");

  $(image).attr("src", href);
  $(overlay).append(image);
  //--------------------
  //wenn auf Bild geklickt wird dann schliessen
  /*
    $(image).click(function(){
      $("#overlay").remove();
    });
  */

  //wenn man auf den grauen Bereich klickt dann soll alles schliessen
  /*
    $("#overlay").click(function() {
    $(this).remove();
  });
  */

  // Bild (overlay) wieder weg clicken
  $(overlay).click(function(){
    $(this).remove();
  });

});//ende click gallery-item
//##########################################################
$(".box3 div").hide();
$(".box3 h2").click(function(){
  // icon vor der Überschrift wird geändert
  $(this).toggleClass("close");
  // $(this).next().animate({"height":"toggle"},500);
  //-----------------------------------------
  if($(this).hasClass("close")){
    $(this).next().animate({"height":"show"},1000);
  }
  else{
    $(this).next().animate({"height":"hide"},300);
  }
  //-----------------------------------------
});
//##########################################################
$(".box4 div").hide();
$(".box4 h2").click(function(){
  $(this).next().animate({"width":"toggle"},1000);
});

//##########################################################
$(".box5 div").hide();

$(".box5 h2").click(function(){
  // sibling = Geschwister Elemente
  $(this).toggleClass("aktiv").siblings("h2").removeClass("aktiv");
  $(this).next().slideToggle().siblings("div").slideUp();
});
/*
wenn auf h2 geklickt wird dann bekommt diese h2 (die angesprochene) eine class="current" 
NUR diese h2 hat eine class="current" die Geschwister-h2 nicht

wenn auf h2 geklickt wird dann bekommt diese h2 (angesprochene) dann
das nächste-Element (div) soll angezeigt werden, die Geschwister-divs
sollen ausgeblendet werden
dadurch entsteht accordion 

Die siblings() Methode gibt alle Geschwister Elemente des ausgewählten Elements.

Geschwisterelemente sind Elemente, die die gleichen Eltern teilen. 
*/
//##########################################################
/*
AusgangsLage

<li>
	<a href="#">Home</a>
</li>

Ziel
<li>
  <span>Home</span>
  <a href="#">Home</a>
</li>
	
<li>
	<span>Gallery</span>
	<a href="#">Gallery</a>
</li>
*/

//in allen li ein <span></span> rein tun
$("#navi li").prepend("<span></span>");
$("#navi li").each(function(){
  $(this).find("a").text();
    let linkText = $(this).find("a").text();

    $(this).find("span").text(linkText);
});

$("#navi li").hover(
                      function(){
                        $(this).find("span").stop(true, true).animate({"margin-top":"-40px"}, 400);
                      }, 
                      function(){
                        $(this).find("span").stop(true, true).animate({"margin-top":"0px"}, 200);
                      }
                      );
//val steht für Wert (value)
$("#eingabe").on("keyup", function(){
  let  eingabe = $(this).val().toLowerCase();

  $(".tabelle-1 tbody tr").each(function(){
    let tableData = $(this).text().toLowerCase();
    //ohne includes() kann man so, wie unten schreiben
    
    // if(tableData.indexOf(eingabe) > -1){
    //   $(this).fadeIn();
    // } 
    // else{
    //   $(this).fadeOut();
    // }
    if(tableData.includes(eingabe)){
      $(this).fadeIn(800);
    }
    else{
      $(this).fadeOut(300);
    }
  });
console.log(eingabe);
  
});
/*
string.includes(searchvalue, start)
------------------------
let text = "Vergangen sei vergangen; Und Zukunft ewig fern;In Gegenwart gefangen; Verweilt die Liebe gern.";
let result = text.includes("Zukunft");
--------------
let text = "Vergangen sei vergangen; Und Zukunft ewig fern;In Gegenwart gefangen; Verweilt die Liebe gern.";
let result = text.includes("Zukunft", 12);
------------------------
Die includes()Methode gibt true zurück, wenn eine Zeichenfolge eine angegebene Zeichenfolge enthält.

Sonst gibt false zurück.

Bei der includes()-Methode wird zwischen Groß- und Kleinschreibung unterschieden.
*/
});//ende ready
/*
.stop() => beendet eine Animation (kann man Argumente geben)

wenn man über die Navi mehrmals hin und her geht dann "merkt" sich JS, dass
der User 20mal darüber gegangen ist und wird die Animation 20mal ausgeführt

jQuery hat die Eigenheit, dass für Effekte eine Warteschlange (Queue) abarbeitet.
Queue - Regel(first in, first out) => bis alle Aufrufe durchgelaufen sind.

Das sieht zwar lustig aus aber sollte man vermeiden...

Die Lösung is:
.stop(true, true)
die beiden Argumente bedeuten:
.stop(clearQueue=true, jumpToEnd=true)

damit sagen wir:
bei jedem erneuten Hover zuerst die laufende Animation anzuhalten
die Queue zu löschen
und zum Ende der Animation zu springen

dadurch kommen keine unerwünschten Nebeneffekte

Animation nur ausführen, wenn der User sie benötigt
*/