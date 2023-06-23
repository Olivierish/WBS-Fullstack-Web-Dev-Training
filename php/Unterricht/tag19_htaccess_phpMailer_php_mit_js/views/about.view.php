<dl>
<?php 
foreach($_SERVER AS $key=>$value) {
  #echo "<dt>$key</dt> <dd>$value</dd>";
}
?>
</dl>
<!-- ############################################# --> 
<?php
$sql = 'SELECT * FROM `users` ORDER BY `nachname`';
$st = $db->query($sql);

$daten = $st->fetchAll();
?>
<h2>User - Datenbank</h2>
<div class="col-md-6 alert alert-primary p-5">
<select name="user" id="user" class="form-select">
  <option value="">Bitte auswählen</option>
  <?php foreach($daten AS $werte): ?>
    <option value="<?= $werte['id']?>">
      <?= $werte['nachname']?>
    </option>
  <?php endforeach;?>
  <!-- den Wert von value in option brauchen wir in der Abfrage (detail.php) -->
</select>
<div id="userDaten" class="fs-2 my-3"></div>
</div>
<!--#######################################################--> 
<h2>User - Datenbank</h2>
<div class="col-md-6 alert alert-primary p-5">
  <?php foreach($daten AS $value):?>
    <a href="#" id="name-<?= $value['id'] ?>" class="btn btn-primary m-1 user">
      <?= $value['nachname'] ?>
    </a>
  <?php endforeach;?>
  <div id="userDetail" class="fs-2 my-3"></div>
</div>
<!--#######################################################--> 
<div class="row list-group-item-secondary">
  <div class="col-12 py-5">
    <article class="alert alert-dark">
      <?php foreach($daten AS $value):?>
        <section class="card alert alert-secondary my-2">
          <h2 id="nachname-<?= $value['id']?>" class="card-header edit" contentEditable="true">
            <?= $value['nachname']?>
          </h2>
          <div class="card-body">
            Motto: <br />
            <p id="motto-<?= $value['id']?>" 
                  contentEditable="true" class="edit <?= ($value['motto']==='') ? 'rahmen' : '' ?>">
            <?= $value['motto']?>
            </p>

            Über mich: <br />
            <p id="info-<?= $value['id']?>" 
                  contentEditable="true" class="edit <?= ($value['info']==='') ? 'rahmen' : '' ?>">
            <?= $value['info']?>
            </p>
            <!--class="rahmen" steht in css
                      wenn in der Tabelle "users" kein motto steht (leer ist)
                    dann soll das auffallen-->
          </div>
          <div class="card-footer">
            angemeldet seit: <?= $value['created_at']?>
          </div>
        </section>
      <?php endforeach;?>
    </article>   
  </div>
</div>  