<?php

session_start();
$page = $_GET['page'] ?? '';

//require_once 'inc/funktionen.inc.php';
require_once 'inc/header.inc.php';

switch($page) {
	case 'infos': include 'inc/infos.inc.php'; break;
	case 'login': include 'inc/login.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';
?>

