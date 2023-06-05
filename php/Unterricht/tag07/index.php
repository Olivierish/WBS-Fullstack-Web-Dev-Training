<?php

session_start();
$page = $_GET['page'] ?? '';

require_once 'inc/funktionen.inc.php';
require_once 'inc/header.inc.php';

switch($page) {
	case 'daten': include 'inc/daten.inc.php'; break;
	case 'register': include 'inc/register.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';
?>

