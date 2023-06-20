<?php 

function e($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', true);
}

function pageTitle() {
  global $page;
  switch($page) {
    case 'about': echo ' - About'; break;
    case 'entries': echo ' - Gästebuch'; break;
    case 'kontakt': echo ' - Kontakt'; break;
    default: echo ' - Startseite'; break;
  }
}

function redirect($url) {
  header('Location:'.$url);
  exit();
}

function csrf_token() {
  $csrfToken = bin2hex(random_bytes(64));
  if( !isset($_SESSION['token']) || empty($_SESSION['token'])) {
    $_SESSION['token'] = $csrfToken;
  }
  return $_SESSION['token'];
}

function formatiereDatum($dbDatum, $format = 'd.m.Y H:i') {
  $datum_db = new DateTime($dbDatum);
  return $datum_db->format($format);
}

function logOut() {
	unset($_SESSION['vorname']);
	unset($_SESSION['id']);
	unset($_SESSION['login']);

	$_SESSION['msg'] = 'Du bist abgemeldet!';
	header('Location:index.php'); 
}