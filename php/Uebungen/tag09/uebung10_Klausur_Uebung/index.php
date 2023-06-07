<?php

session_start();
$page = $_GET['page'] ?? '';

require_once 'inc/functions.inc.php';
require_once 'inc/header.inc.php';

switch($page) {
	case 'kunden': include 'inc/kunden.inc.php'; break;
	case 'rechner': include 'inc/rechner.inc.php'; break;
	case 'origin': include 'inc/origin.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';
?>