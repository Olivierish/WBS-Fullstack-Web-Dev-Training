<?php
session_start();

require_once dirname(__DIR__,2).'/inc/db_connect.php'; 
require_once dirname(__DIR__,2).'/inc/functions.php';

if(!empty($_POST)) {
  $mail = '';
  if(isset($_POST['mail'])) $mail = (string) $_POST['mail'];
  $pwd = '';
  if(isset($_POST['pwd'])) $pwd = (string) $_POST['pwd'];
  $csrf = '';
  if(isset($_POST['csrf_token'])) $csrf = (string) $_POST['csrf_token'];
  #--------------------------------------
  if(!empty($mail) && !empty($pwd)) {
    //wenn Felder nicht leer dann select
    $stmt = $db->prepare('SELECT * FROM `users` WHERE `email` = :mail');
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $result = $stmt->fetch();
    #--------------------
    if($result && password_verify($pwd, $result['password']) && $csrf === $_SESSION['token']) {
      #wenn Anmeldung erfolgreich dann bestimmt Werte in session speichern
      #brauchen wir später für die Ausgabe oder Abfragen
      $_SESSION['vorname'] = $result['vorname'];
      $_SESSION['id'] = $result['id'];
      $_SESSION['login'] = true;

      $_SESSION['msg'] = 'Login erfolgreich!';

      #wenn erfolgreich dann das alte $_SESSION['token'] löschen und neu generieren
      unset($_SESSION['token']);
    }
    else {
      $_SESSION['msg'] = 'Falsche Logindaten';
    }
    #--------------------
  }
  else {
    $_SESSION['msg'] = 'Felder dürfen nicht leer sein.';
  }
  #--------------------------------------
}

redirect('../../index.php');
#header('Location:../../index.php');
