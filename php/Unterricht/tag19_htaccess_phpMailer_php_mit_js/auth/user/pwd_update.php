<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['login'])) {
	$id = $_SESSION['id'];
} else {
	http_response_code(403);
	echo '<p class="fs-2 text-light fw-bold p-2">Bitte sich anmelden oder registrieren</p>';
	die();
}

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

$page = 'page=profil&pwd';

$pwd = '';
if(isset($_POST['pwd'])) $pwd = (string) $_POST['pwd'];
$pwd_new = '';
if(isset($_POST['pwd_new'])) $pwd_new = (string) $_POST['pwd_new'];
$pwd_repeat = '';
if(isset($_POST['pwd_repeat'])) $pwd_repeat = (string) $_POST['pwd_repeat'];

if( empty($pwd) || empty($pwd_new) || empty($pwd_repeat)) {
  $_SESSION['msg'] = "Felder dürfen nicht leer sein";
}
else if($pwd_new !== $pwd_repeat) {
  $_SESSION['msg'] = "Beide neuen Passwörter müssen übereinstimmen";
}
else {
  #---------------------
  $stmt = $db->prepare('SELECT * FROM `users` WHERE `id` = :id');
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  $result = $stmt->fetch();
  #---------------------
  #wurde der User gefunden?----------------------------------
  if(!empty($result)) {
    if(password_verify($pwd, $result['password'])
        && $_POST['csrf_token'] === $_SESSION['token']
          && $_SESSION['code'] === $_POST['captcha'] ) {

      $stmt = $db->prepare('UPDATE `users` SET `password` = :newPwd, `updated_at` = NOW() WHERE `id` = :id');
      $stmt->bindValue(':newPwd', password_hash($pwd_new, PASSWORD_DEFAULT));
      $stmt->bindValue(':id', $id);
      $stmt->execute();
      
      /*
      #kann man auch so schreiben
      stmt->execute([
														':newPwd' => password_hash($_POST["pwd_new"], PASSWORD_DEFAULT),
														':id' => $id,
													]);
			$stmt->execute();
			#-----------------------------
			$stmt = $db->prepare('UPDATE `users` SET `password` = ?,
																										 `updated_at` = NOW()
																							WHERE `id` = ?');
			$stmt->execute([password_hash($_POST["pwd_new"], PASSWORD_DEFAULT), $id]);
			*/

      logOut(); 
      $_SESSION['msg'] .= "<br />Passwort wurde geändert<br />Bitte sich neu anmelden";
      $page = '';
    } else {
      $_SESSION['msg'] = "Das aktuelle Passwort ist nicht korrekt<br />Oder die Zeichen nicht richtig eingegeben";
    }
  }
  #wurde der User gefunden?----------------------------------
}#ende else wenn alles korrekt

header('Location: ../../?'.$page);