<?php

userIstLogged();

$stmt = $db->prepare('SELECT * FROM `users` WHERE `id` = :id');
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$result = $stmt->fetch();
?>
<div class="col-12">

<div class="card p-0 my-2 text-center rounded-1 bg-primary bg-opacity-10 text-light">
  <h2 class="card-header"><?= e($result['vorname']) . ', ' . e($result['nachname'])?></h2>
  <div class="card-body">
    <p>Motto: <?= e($result['motto'])?></p>
    <p><?= e($result['info'])?></p>
    <p>
      <a href="?page=edit" class="btn btn-primary fw-bold">Profil bearbeiten</a>
      <a href="?page=profil&del" class="btn btn-danger fw-bold">Profil löschen</a>
      <a href="?page=profil&pwd" class="btn btn-warning fw-bold">Passwort ändern</a>
    </p>
  </div>
  <div class="card-footer">
		<p>angemeldet seit: <?= formatiereDatum($result['created_at'])?></p>
    <p>bearbeitet am: <?= formatiereDatum($result['updated_at'])?></p>
	</div>
</div>

<!--wenn auf Profil löschen geklickt wird dann soll dieser Bereich angezeigt werden
?page=profil&del
--> 
<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['del'])):?>
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
<?php endif;?>
<!--############################################################--> 
<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['pwd'])):?>
<div class="col-12 bg-warning bg-opacity-50 p-2">
<form action="auth/user/pwd_update.php" method="POST" class="row p-0 m-0">
  <div class="p-1 fs-3 fw-bold">Change Passwort</div>
  <div class="p-1">
    <input type="password" class="form-control" name="pwd" placeholder="Passwort..." />
  </div>
  <div class="p-1">
    <input type="password" class="form-control" name="pwd_new" placeholder="Neues Passwort..." />
  </div>
  <div class="p-1">
    <input type="password" class="form-control" name="pwd_repeat" placeholder="Passwort..." />
  </div>
  <div class="p-1">
    <img src="inc/captcha.php" alt="Zeichen" />
  </div>
  <div class="p-1 col-md-3">
    <input type="text" class="form-control p-1" name="captcha" placeholder="Zeichen eingeben..." />
    <div class="d-inline-block bg-light p-2 my-2">
      <a href="index.php?page=profil&pwd">
        <img src="images/refresh.png" alt="Neue Zeichen - Seite aktualisieren" />
      </a>
    </div>
  </div>
  <div class="p-1">
    <button type="submit" 
            class="btn btn-warning btn-lg">Passwort ändern</button>
  </div>
  <input type="hidden" name="csrf_token" value="<?= csrf_token();?>" />
</form>
</div>
<?php endif;?>

</div>