<?php 
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    $id = $_SESSION['id'];
} else {
    http_response_code(403);
    echo '<p class="fs-2 text-light fw-bold p-2">Bitte sich anmelden oder registrieren</p>';
    die();
}
?>

<?php 
$stmt = $db -> prepare('SELECT * FROM `users` WHERE `id` = :id ');
$stmt -> bindValue(':id', $_SESSION['id']);
$stmt -> execute();
$result = $stmt -> fetch();
?>

<div class="row">
<div class="col-12 py-2 border">
<div class="card mx-auto" style="width: 50rem;">
  <img class="card-img-top mx-auto my-5" src="images/user.png" alt="Card image cap" style="width : 100px; height : auto;">
  <div class="card-body">
    <h5 class="card-title"><?= e($result['vorname']). ', ' .e($result['nachname']) ?></h5>
    <p class="card-text"><?= e($result['info']) ?>Hello</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Motto: <?= e($result['motto']) ?> </li>
    <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li> -->
  </ul>
  <div class="card-body text-center">
    <a href="index.php?page=edit" class="card-link btn btn-warning">Profil Bearbeiten</a>
    <a href="?page=profil&del" class="card-link  btn btn-danger">Profil löschen</a>
    <a href="?page=profil&pwd" class="card-link  btn btn-info">Passwort ändern</a>
  </div>
  <div class="card-footer d-flex justify-content-around">
    <p>Angemeldet seit : <?= formatiereDatum($result['created_at']) ?> </p>
    <p>Bearbeitet seit : <?= formatiereDatum($result['updated_at']) ?> </p>
  </div>
  </div>
</div>
</div>

<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['del'])):?>
 <div class="row"> 
  <div class="col-12 rot p-2">
    <form action="auth/user/delete.php" method="POST" class="row p-0 m-0">
  <div class="p-1 fs-3 fw-bold">Willst Du wirklich dein Profil löschen?</div>
  <div class="p-1">
    <input type="password" class="form-control" name="pwd" placeholder="Passwort..." />
  </div>
  <div class="p-1">
    <input type="password" class="form-control" name="pwd_repeat" placeholder="Passwort wiederholen..." />
  </div>
  <div class="p-1">
    <button type="submit" 
            class="btn btn-danger btn-lg" 
              onclick="return confirm('Willst Du wirklich alle deine Daten löschen?');">Ja mein Profil löschen</button>
  </div>
  <input type="hidden" name="csrf_token" value="<?= csrf_token();?>" />
</form>
  </div>
</div>
<?php endif;?>
<!-- ################################################################# -->
<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['pwd'])):?>
<div class="col-12 p-2">
  <form action="auth/user/pwd_update.php" method="POST" class="row p-0 m-0">
    <div class="p-1 fs-3">Password ändern</div>
    <div class="p-1">
    <input type="password" class="form-control" name="pwd" placeholder="Aktueles Passwort..." />
  </div>
  <div class="p-1">
    <input type="password" class="form-control" name="pwd_new" placeholder="neues Passwort..." />
  </div>
  <div class="p-1">
    <input type="password" class="form-control" name="pwd_repeat" placeholder="Repeat Passwort..." />
  </div>
  <div class="p-1">
  <img src="inc/captcha.php" alt="Zeichen"/>
</div>
<div class="p-1 col-md-3">
    <input type="text" class="form-control" name="captcha" placeholder="Zeichen eingeben..." />
    <div class="d-inline-block bg-white py-2 px-3">
      <a href="index.php?page=profil&pwd"><img src="images/refresh.png" alt="Neue Zeichen" /></a>
    </div>
</div>
  <div class="p-1">
    <button type="submit" 
            class="btn btn-info btn-lg" 
              onclick="return confirm('Willst Du wirklich alle deine Daten löschen?');">Ja mein Password ändern</button>
  </div>
  <input type="hidden" name="csrf_token" value="<?= csrf_token();?>" />
  </form>
</div>
<?php endif;?>
<!-- </div> -->
 <div class="row"> 
<p><a href="https://www.flaticon.com/free-icons/user" title="user icons">User icons created by Freepik - Flaticon</a></p>

</div>
