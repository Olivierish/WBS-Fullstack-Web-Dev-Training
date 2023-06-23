<div class="row">
  <p class="hero lead display-4 text-secondary fw-bold pt-3 pb-5" style="trnasition: all 0.3s ease-in-out;">
  Möchten Sie eine Karriere im technischen Bereich starten? Dann sind Sie bei uns genau richtig.
  </p>
</div>
<div class="row">
  <h2 class="h2 text-primary mt-2">Neueste Seminare</h2>
    <?php
    $sortieren = (!isset($_GET['sort'])) ? '' : e($_GET['sort']);
      switch ($sortieren) {
        case 'up':
          $stmt = $db->prepare('SELECT * FROM `seminar`  
        ORDER BY seminar.titel ASC LIMIT 0,2');
          break;
        case 'down':
          $stmt = $db->prepare('SELECT * FROM `seminar`  
          ORDER BY seminar.titel DESC LIMIT 0,2');
          break;
        
        default:
        $stmt = $db->prepare('SELECT * FROM `seminar`  
        ORDER BY seminar.id DESC LIMIT 0,2');
          break;
      }

      $stmt->execute();
      $seminars = $stmt->fetchAll(); 
    ?>
  <div class="col-md-6 bg-white p-3 rounded-2 my-3" style="box-shadow: 4px 5px 22px -7px rgba(0,0,0,0.5);">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Titel</th>
          <th scope="col">von</th>
          <th scope="col">bis</th>
          <th scope="col">Preis</th>
        </tr>
      </thead>
      <tbody>
          <?php for ($i=0; $i < sizeof($seminars); $i++): ?>
          <tr>
          <td scope="row"><?= $seminars[$i]['titel'] ?></td>
          <td><?= formatiereDatum($seminars[$i]['von'],'d.m.Y') ?></td>
          <td><?= formatiereDatum($seminars[$i]['bis'],'d.m.Y') ?></td>
          <td><?= number_format($seminars[$i]['preis'],2,',','.') ?>€</td>
          </tr>
        <?php endfor; ?> 
      </tbody>
    </table>
    <div class="text-center pb-2">
      <a href="index.php?&amp;sort=down" style="text-decoration : none;">
        <button class="btn btn-primary me-2">Titel Down</button>
      </a>
      <a href="index.php?&amp;sort=up" style="text-decoration : none;">
        <button class="btn btn-primary">Titel Up</button>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <p class="hero lead display-4 text-secondary fw-bold pt-3 pb-5 mt-5" style="trnasition: all 0.3s ease-in-out;">
    Füllen Sie das Bewerbungsformular aus, und wir senden Ihnen einen Link zu unserem Wettbewerb zu - ein paar einfache Aufgaben, mit denen Sie uns zeigen, dass Sie schnell lernen können.
  </p>
</div>

<div class="row">
  <h2 class="h2 text-primary mt-5" id="anmelden">Seminaranmeldung</h2>
  <div class="col-md-12 bg-white p-2 rounded-2 my-3" style="box-shadow: 4px 5px 22px -7px rgba(0,0,0,0.5);">
    <form action="auth/entries/insert.php" method="POST" class="bg-second bg-opacity-10 py-5 px-5 rounded-2 mx-auto">

          <div class="form-floating mb-3">
              <input type="text" class="form-control"  id="floatingNachname" name="nachname">
              <label for="floatingNachname">Name</label>
          </div>
      
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingVorname"   name="vorname">
              <label for="floatingVorname">Vorname</label>
          </div>
          
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingTel"   name="tel">
              <label for="floatingTel">Telefon</label>
          </div>
          
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingMail" name="mail">
              <label for="floatingMail">E-mail</label>
          </div>
          <div  class="mb-3">
            <?php
            $stmt2 = $db->prepare('SELECT * FROM `seminar`  
                                  ORDER BY seminar.titel');
            
            $stmt2->execute();
            $seminars_by_titel = $stmt2->fetchAll(); 
            ?>
            <select class="form-select" name="seminar">
                <option value="<?= $seminars_by_titel[0]['id'] ?>"><?= $seminars_by_titel[0]['titel'] ?></option>
                <?php for ($i=1; $i < sizeof($seminars_by_titel); $i++): ?>
                  <option value="<?= $seminars_by_titel[$i]['id']?>"><?= $seminars_by_titel[$i]['titel'] ?></option>
                <?php endfor; ?> 
            </select>
          </div>
          <input type="hidden" name="token" value="<?= csrf_token();?>" class="form-control" />	
          <div>
              <button type="submit" class="btn btn-primary" name="btnSend">mich verbindlich anmelden</button>
          </div>
          
    </form>
  </div>
</div>

<!-- Dieser Inhalt wird nach 3 Sekunden verschwinden(Ich habe JS verwendet) -->
<div class="row">
  <?php if(isset($_SESSION['msg'])):?>
    <div id="msg" class="col-md-6 p-2 mx-auto">
        <p class="alert alert-danger text-center" style="transition : all ease-in-out 0.3s;"><?= $_SESSION['msg']?></p>
    </div>
    <?php endif; ?>
</div>


