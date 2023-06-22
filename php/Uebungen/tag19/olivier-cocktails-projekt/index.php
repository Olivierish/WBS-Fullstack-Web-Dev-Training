<?php
session_start(); 

$page = $_GET['page'] ?? '';
require_once __DIR__."/inc/db_connect.php";
require_once __DIR__."/inc/functions.php";
require_once __DIR__."/inc/header.php";
$templateFile =  __DIR__.'/views/'.$page. '.view.php';

if(file_exists($templateFile)){
    require_once $templateFile;
}
else{
    require_once __DIR__.'/views/home.view.php';
}
require_once __DIR__."/inc/footer.php";
?>


