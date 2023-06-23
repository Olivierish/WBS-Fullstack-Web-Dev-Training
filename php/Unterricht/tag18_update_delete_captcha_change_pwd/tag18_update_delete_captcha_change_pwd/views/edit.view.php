<?php 


if(isset($_SESSION['id']) && isset($_SESSION['login'])) {
  $id = $_SESSION['id'];
} else {
  http_response_code(403);
  echo '<p class="fs-2 text-light fw-bold p-2">Bitte sich anmelden oder registrieren</p>';
  die();
}

$stmt = $db->prepare('SELECT * FROM `users` WHERE `id` = :id');
$stmt->bindValue(':id', $id);
$stmt->execute();
$result = $stmt->fetch();
?>
<div class="col-md-12 p-2">
  <form action="auth/user/update.php" method="POST" class="rounded-1 p-2">
    <fieldset class="border border-light border-2 p-1 rounded-2">
      <legend class="text-center">Profil bearbeiten</legend>
      <div class="p-1">
        E-Mail <i class="fa-solid fa-at text-warning fs-2"></i>:
        <p class="alert alert-primary d-inline-block p-1 rounded-2"><?= $result['email']?></p>
        <input type="text" name="name" 
                value="<?= $result['nachname']?>" placeholder="Nachname..." class="form-control my-1" />
        <input type="text" name="vorname" 
                value="<?= $result['vorname']?>" placeholder="Vorname..." class="form-control my-1" />
        <input type="text" name="motto" 
                value="<?= $result['motto']?>" placeholder="Motto..." class="form-control my-1" />
        <textarea name="info" cols="10" rows="5" 
                placeholder="Info über mich eingeben" class="form-control my-1"><?= $result['info']?></textarea>
        <input type="hidden" name="token" value="<?= csrf_token();?>" class="form-control my-1" />
      </div>
      <div class="my-1 text-center">
        <button type="submit" class="btn btn-lg btn-primary fw-bold">Meine Daten ändern</button>
      </div>
    </fieldset>
  </form>
</div>