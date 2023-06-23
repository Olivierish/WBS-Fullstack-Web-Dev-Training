<?php 
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    $id = $_SESSION['id'];
} else {
    http_response_code(403);
    echo '<p class="fs-2 text-light fw-bold p-2">Bitte sich anmelden oder registrieren</p>';
    die();
}

$stmt = $db -> prepare('SELECT * FROM `users` WHERE `id` = :id');
$stmt -> bindValue(':id', $id);
$stmt -> execute();
$result = $stmt->fetch();
?>

<div class="col-md-12 p-2">
    <form action="auth/user/update.php" method="post">
        <fieldset class="border border-secondary border-2 p-1 rounded-2">
            <legend class = "text-center">Profil bearbeiten</legend>
            <div class="p-1">
                E-mail<i class="fa-solid fa-at text-warning fs-2"></i>:
                <p class="alert alert-success d-inline-block p-1 rounded-2"><?= $result['email']?></p>
                <div class="form-group  my-1">
                    <input type="text" name="name" class="form-control" placeholder ="Nachname..." value="<?= $result['nachname']?>">
                    <small id="helpId" class="text-muted">Nachname</small>
                </div>
                <div class="form-group  my-1">
                    <input type="text" name="vorname" class="form-control" placeholder ="Vorname..." value="<?= $result['vorname']?>">
                    <small id="helpId" class="text-muted">Vorname</small>
                </div>
                <div class="form-group  my-1">
                    <input type="text" name="motto" class="form-control" placeholder ="Motto..." value="<?= $result['motto']?>">
                    <small id="helpId" class="text-muted">Motto</small>
                </div>
                <div class="form-group my-1">
                  <textarea class="form-control" name="info" rows="5" cols="10" placeholder="Info über mich eingeben"><?= $result['info']?></textarea>
                </div>
                <div>
                    <input type="hidden" name="token" value="<?= csrf_token();?>" class="form-control my-1">
                </div>
                <div class="my-2 text-center">
                    <button type="submit" class="btn btn-lg btn-warning">Meine Daten ändern</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>