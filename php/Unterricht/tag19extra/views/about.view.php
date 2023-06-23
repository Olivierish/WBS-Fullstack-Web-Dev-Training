<div class="card">
  <h2 class="card-header">About</h2>
  <div class="card-body">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, </p>
  </div> 
</div>


<dl>
<?php 
foreach($_SERVER AS $key => $value){
  // echo "<dt>$key</dt><dd>$value</dd>";
}
?>
</dl>

<?php 
#Quand on veut seulement faire l'affichage on peut utlisier cette technique. il y a peu de risque de securité
$sql='SELECT * FROM `users` ORDER BY `nachname`';
$st = $db->query($sql);
$daten = $st->fetchAll();
?>

<h2 class="text-center">Users</h2>
<div class="col-md-8 alert alert-warning p-2 mx-auto">
  <select name="user" id="user" class="form-select">
    <option value="">Bitte auswählen</option>
    <?php foreach ($daten as $werte):?>
      <option value="<?= $werte['id']?>">
        <?= $werte['nachname'] ?>
      </option>
    <?php endforeach;?>
  </select>
  <div id="userDaten" class="fs-2 my-3">
  </div>
  <!-- ########################################### -->
  <div class="col-md-6 alert alert-warning p-2 mx-auto">
    <?php foreach ($daten as $value):?>
      <section class="card my-2">
        <h2 id="nachname-<?= $value['id']?>" class="class-header edit" contenteditable="true"><?= $value['nachname'] ?></h2>
        <div class="card-body">
          <p id="motto-<?= $value['id']?>" contenteditable="true" class="edit">Motto: <br> <?= $value['motto']?></p>
          <p id="info-<?= $value['id']?>"contenteditable="true" class="edit">Über mich: <br> <?= $value['info']?></p>
        </div>
        <div class="card-footer">
          angemeldet seit: <?= $value['created_at'] ?>
        </div>
      </section>
    <?php endforeach;?>
  </div>

</div>