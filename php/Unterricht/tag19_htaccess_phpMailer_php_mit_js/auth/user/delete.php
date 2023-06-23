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

$pwd = '';
if(isset($_POST['pwd'])) $pwd = (string) $_POST['pwd'];
$pwd_repeat = '';
if(isset($_POST['pwd_repeat'])) $pwd_repeat = (string) $_POST['pwd_repeat'];
$token = '';
if(isset($_POST['csrf_token'])) $token = (string) $_POST['csrf_token'];
#--------------------------------------
if(!empty($pwd) && !empty($pwd_repeat)) {
  #++++++++++++++++++++++++++++++++++
  $stmt = $db->prepare('SELECT `id`, `password` FROM `users` WHERE `id` = :id');
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  $result = $stmt->fetch();
  #----------------------------------
  if(password_verify($pwd, $result['password']) && $pwd === $pwd_repeat && $token === $_SESSION['token']){
    $stmt = $db->prepare('DELETE FROM `users` WHERE `id` = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    logOut();
    $_SESSION['msg'] = 'Dein Profil wurde gelöscht';
    unset($_SESSION['token']);
  } else {
    $_SESSION['msg'] = 'Falsche Eingaben';
  }
  #++++++++++++++++++++++++++++++++++
}
else {
  $_SESSION['msg'] = 'Bitte das Passwort eingeben und bestätigen';
}

redirect('../../?page=profil&del');
