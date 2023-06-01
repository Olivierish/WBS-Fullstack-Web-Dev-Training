<?php

$page = $_GET['page'] ?? '';

require_once 'inc/header.inc.php';

switch($page) {
	case 'zeit': include 'inc/zeit.inc.php'; break;
	case 'cookie': include 'inc/register.inc.php'; break;
	case 'kontakt': include 'inc/kontakt.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';
?>
