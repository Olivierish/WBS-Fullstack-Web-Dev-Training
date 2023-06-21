<?php 
$stmt = $db -> prepare('SELECT * FROM `users` WHERE `id` = :id ');
$stmt -> bindValue(':id', $_SESSION['id']);
$stmt -> execute();
$result = $stmt -> fetch();
?>

<div class="row">
<div class="col-12 p-2">
<div class="card" style="width: 50rem;">
  <img class="card-img-top mx-auto" src="images/user.png" alt="Card image cap" style="width : 100px; height : auto;">
  <div class="card-body">
    <h5 class="card-title"><?= e($result['vorname']). ', ' .e($result['nachname']) ?></h5>
    <p class="card-text"><?= e($result['info']) ?>Hello</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Motto: <?= e($result['motto']) ?> </li>
    <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li> -->
  </ul>
  <div class="card-body">
    <a href="#" class="card-link btn btn-warning">Profil Bearbeiten</a>
    <a href="#" class="card-link  btn btn-danger">Profil löschen</a>
  </div>
  <div class="card-footer">
    Angemeldet seit : <?= formatiereDatum($result['created_at']) ?> </div>
  </div>
</div>
</div>
</div>
<p><a href="https://www.flaticon.com/free-icons/user" title="user icons">User icons created by Freepik - Flaticon</a></p>
