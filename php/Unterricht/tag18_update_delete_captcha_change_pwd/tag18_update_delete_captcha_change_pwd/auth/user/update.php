<?php
session_start();

userIstLogged();

require_once dirname(__DIR__,2).'/inc/db_connect.php'; 
require_once dirname(__DIR__,2).'/inc/functions.php';

#wenn die Felder leer sind dann geh zu edit.view.php 
$page = 'edit';

if(!empty($_POST)) {
  $name = '';
  if(isset($_POST['name']))     $name = (string) $_POST['name'];
  $vorname = '';
  if(isset($_POST['vorname']))  $vorname = (string) $_POST['vorname'];
  $motto = '';
  if(isset($_POST['motto']))    $motto = (string) $_POST['motto'];
  $info = '';
  if(isset($_POST['info']))     $info = (string) $_POST['info'];
  $token = '';
  if(isset($_POST['token']))    $token = (string) $_POST['token'];
  #---------------------------------------
  if( !empty($name) && !empty($vorname) && $token === $_SESSION['token']) {
    $stmt = $db->prepare('UPDATE `users` SET `nachname` = :name,
                                              `vorname` = :vorname,
                                              `motto`   = :motto,
                                              `info`    = :info,
                                              `updated_at` = NOW()
                                              WHERE `id` = :id');
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':vorname', $vorname);
    $stmt->bindValue(':motto', $motto);
    $stmt->bindValue(':info', $info);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $_SESSION['vorname'] = $vorname;
    $_SESSION['msg'] = 'Eintrag wurde geändert!';
    #wenn UPDATE geklappt hat dann geh zu profil.view.php 
    $page = 'profil';
  } else {
    $_SESSION['msg'] = 'Pflichtfelder dürfen nicht leer sein';
  }
  #---------------------------------------
}

#$page ändert den Wert; entweder edit oder profil
header('Location:../../index.php?page='.$page);