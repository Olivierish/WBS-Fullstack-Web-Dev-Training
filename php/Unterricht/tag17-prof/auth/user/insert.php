<?php
session_start();

require_once dirname(__DIR__,2).'/inc/db_connect.php'; 
require_once dirname(__DIR__,2).'/inc/functions.php';

if(!empty($_POST)) {
  $name = '';
  if(isset($_POST['name'])) $name = (string) $_POST['name'];
  $vorname = '';
  if(isset($_POST['vorname'])) $vorname = (string) $_POST['vorname'];
  $mail = '';
  if(isset($_POST['mail'])) $mail = (string) $_POST['mail'];
  $pwd = '';
  if(isset($_POST['pwd'])) $pwd = (string) $_POST['pwd'];
  $token = '';
  if(isset($_POST['token'])) $token = (string) $_POST['token'];
  #---------------------------------------------------------
  if(!empty($name) && !empty($vorname) && !empty($mail) && !empty($pwd) && $token === $_SESSION['token']) {
    #zuerst kontrollieren, ob es die Mail schon mal gibt
    #über die Mail kann sich der User anmelden
    #Mail muß UNIQUE sein (der gleiche Wert 2 mal in der Tabelle = geht nicht)
    $stmt = $db->prepare('SELECT `email` FROM `users` WHERE `email` = :mail');
    $stmt->bindValue('mail', $mail);
    $stmt->execute();
    $result = $stmt->fetch();    
    #------------------------
    if(!empty($result['email'])) {
      $_SESSION['msg'] = 'E-Mail existiert schon!';
    }else {
      #wenn die Mail (der Wert, den der User im Formular schreibt)
      #nicht in der Tabelle gefunden wird dann INSERT
      $stmt = $db->prepare( 'INSERT INTO `users` (`nachname`,`vorname`,`email`,`password`) 
                                        VALUES(:name, :vorname, :mail, :pwd)' );
      $stmt->bindValue('name', $name);
      $stmt->bindValue('vorname', $vorname);
      $stmt->bindValue('mail', $mail);
      $stmt->bindValue('pwd', password_hash($pwd, PASSWORD_DEFAULT));
      $stmt->execute();
      $_SESSION['msg'] = "Eintrag wurde eingefügt\nSie können sich einloggen!";
    }
    #------------------------
  } else {
    $_SESSION['msg'] = 'Alle Felder sind Pflichtfelder (dürfen nciht leer sein)';
    #echo 'Alle Felder sind Pflichtfelder (dürfen nciht leer sein)';
  }
  #---------------------------------------------------------
}

header('Location:../../index.php?page=register');