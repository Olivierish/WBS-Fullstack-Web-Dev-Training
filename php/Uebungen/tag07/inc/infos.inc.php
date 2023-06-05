<?php 
if(!isset($_SESSION['m'])):
   echo '<div class="col-md-2 mx-auto">';
   echo '<p class="text-dark">Kein Zugang</p>';
   echo '<a href="index.php?page=login" class="btn btn-warning btn-sm">Zum Login</a>';
   echo '</div>';
  
else : 
  echo "<p>Du kannst die Inhalte sehen</p>";

endif;

?>
<!-- 
<div class="container-art">
    <h2 class="mb-3">Article Title 1: Mein Arbeitgeber</h2>

    <div id="collapseExample1" class="collapse">
      <p>
        Un employeur idéal dans le domaine de l'informatique serait une entreprise qui met en avant les valeurs suivantes:<br>
        Ein idealer Arbeitgeber im IT-Bereich wäre ein Unternehmen, das die folgenden Werte in den Fokus stellt:<br><br>

        Culture d'entreprise solide: L'entreprise doit avoir une culture d'entreprise clairement définie et des valeurs qui sont en accord avec celles de ses employés. Elle doit avoir un environnement de travail stimulant, inclusif et positif, où chacun se sent valorisé.
      </p>
    </div>

    <a href="#collapseExample1" class="btn btn-primary" data-bs-toggle="collapse">Toggle Content 1</a>
  </div>

  <div class="container-art">
    <h2 class="mb-3">Article Title 2: Mein Bewerbung in Frankreich</h2>

    <div id="collapseExample2" class="collapse">
      <p>
        Ein Bewerbungsgespräch in Frankreich ist ein wichtiger Teil des Einstellungsprozesses. Es gibt einige wichtige Punkte, die man beachten sollte, um sich auf ein solches Gespräch vorzubereiten. <br><br>

        Zunächst einmal ist es wichtig, pünktlich zu sein. Man sollte einige Minuten vor der vereinbarten Zeit am Ort des Vorstellungsgesprächs eintreffen. Es ist auch ratsam, sich vorher über den Ort zu informieren, um Verspätungen zu vermeiden.
      </p>
    </div>

    <a href="#collapseExample2" class="btn btn-primary" data-bs-toggle="collapse">Toggle Content 2</a>
  </div>

  <div class="container-art">
    <h2 class="mb-3">Article Title 3: Mein Vorbild</h2>

    <div id="collapseExample3" class="collapse">
      <p>
        Die Personen, die mich in meinem Leben inspirieren, sind meine Eltern. Meine Mutter inspiriert mich auf der Beziehungsebene und mein Vater auf der professionellen Ebene.<br><br>

        Heute ist mein Vater im Ruhestand. Er arbeitete in der Konstruktion und Planung von Häusern. Als ich klein war, beobachtete ich, wie er Pläne mit solcher Voraussicht und Konzentration zeichnete, und das faszinierte mich sehr. Selbst wenn er bei der Arbeit sehr gestresst war, reagierte er ruhig und besonnen.
      </p>
    </div>

    <a href="#collapseExample3" class="btn btn-primary" data-bs-toggle="collapse">Toggle Content 3</a>
  </div>

  <div class="container-art">
    <h2 class="mb-3">Article Title 4: Produkt</h2>

    <div id="collapseExample4" class="collapse">
      <p>
        Ich werde euch ein Produkt vorstellen, das die Wände meiner Wohnung gerettet hat! Dieses Produkt heißt Powerline-Adapter.<br><br>

        Lasst ihr mich zunächst über das Problem sprechen, das wir hatten:<br>
        In unserer aktuellen Wohnung funktionierte das WLAN im ersten Stock aufgrund dicker Wände nicht. Die naheliegendste Lösung wäre gewesen, ein Netzwerkkabel zu kaufen, Löcher in die Wände zu bohren und einen Router im Obergeschoss zu installieren. 
      </p>
    </div>

    <a href="#collapseExample4" class="btn btn-primary" data-bs-toggle="collapse">Toggle Content 4</a>
  </div>   

  -->
   
<?php
    #endif; #end isset
?> 