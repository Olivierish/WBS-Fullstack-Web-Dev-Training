<?php
session_start(); 

// var_dump(bin2hex(random_bytes(64)));

$page = $_GET['page'] ?? '';
require_once __DIR__."/inc/db_connect.php";
require_once __DIR__."/inc/functions.php";
require_once __DIR__."/inc/header.php";

#flush messages
if(isset($_SESSION['msg'])) unset($_SESSION['msg']);

$templateFile =  __DIR__.'/views/'.$page. '.view.php';

if(file_exists($templateFile)){
    require_once $templateFile;
}
else{
    require_once __DIR__.'/views/index.view.php';
}
require_once __DIR__."/inc/footer.php";
?>