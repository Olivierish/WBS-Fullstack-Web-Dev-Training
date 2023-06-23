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

$page = 'edit';
if (!empty($_POST)){
   $name ='';
   if(isset($_POST['name'])) $name = (string) $_POST ['name'];
   if(isset($_POST['vorname'])) $vorname = (string) $_POST ['vorname'];
   if(isset($_POST['motto'])) $motto = (string) $_POST ['motto'];
   if(isset($_POST['info'])) $info = (string) $_POST ['info'];
   if(isset($_POST['token'])) $token = (string) $_POST ['token'];

   if (!empty($name) && !empty($vorname) && $token === $_SESSION['token']) {
    
    $stmt = $db -> prepare('UPDATE `users`SET `nachname` = :name,
                                                `vorname` = :vorname,
                                                `motto` = :motto,
                                                `info` = :info,
                                                `updated_at` = NOW()
                                                WHERE `id` = :id
                                                ');

    $stmt -> bindValue('name', $name);
    $stmt -> bindValue('vorname', $vorname);
    $stmt -> bindValue('motto', $motto);
    $stmt -> bindValue('info', $info);
    $stmt -> bindValue('id', $id);
    $stmt -> execute();

    $_SESSION['vorname'] = $vorname;
    $_SESSION['msg'] = 'Eintrag wurde geändert!';
    $page = 'profil';
   } else {
    $_SESSION['msg'] = 'Pflichtfelder dürfen nicht leer sein'; 
   }
   
}

header('Location:../../index.php?page='.$page);
?>
