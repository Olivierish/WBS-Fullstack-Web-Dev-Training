<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    $id = $_SESSION['id'];
} else {
    http_response_code(403);
    echo "Bitte sich anmelden oder registrieren";
    die();
}

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

?>

ich bin delete

