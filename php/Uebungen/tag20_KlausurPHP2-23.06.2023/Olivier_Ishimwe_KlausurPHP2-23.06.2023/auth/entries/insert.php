<?php 
session_start();
require_once '../../inc/db_connect.php';

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

if (!empty($_POST)) {
   $vorname = '';
   if(isset($_POST['vorname'])) $vorname = (string) e($_POST['vorname']);
   $name = '';
   if(isset($_POST['nachname'])) $nachname = (string) e($_POST['nachname']);
   $tel = '';
   if(isset($_POST['tel'])) $tel = (string) e($_POST['tel']);
   $mail = '';
   if(isset($_POST['mail'])) $mail = (string) e($_POST['mail']);
   $seminarWahl = '';
   if(isset($_POST['seminar'])) $seminarWahl = (string) e($_POST['seminar']);
   $token = '';
   if(isset($_POST['token'])) $csrf_token = (string) $_POST['token'];

if((!empty($nachname)) && (!empty($vorname)) && (!empty($tel)) && (!empty($mail)) && ($csrf_token === $_SESSION['token'])){
        $stmt = $db->prepare('INSERT INTO `teilnehmer` (`lastname`,`firstname`,`telefon`,`email`,`sid`) 
                              VALUES(:lastname, :firstname, :telefon,:email, :sid)');
         $stmt->bindValue('lastname', $nachname);
         $stmt->bindValue('firstname', $vorname);
         $stmt->bindValue('telefon', $tel);
         $stmt->bindValue('email', $mail);
         $stmt->bindValue('sid', $seminarWahl);
         $stmt->execute();

   $_SESSION['msg'] = 'Eintrag wurde eingefügt.';

} else{
    $_SESSION['msg'] = 'Alle  Felder müssen ausgefüllt sein.';
}#?empty inhalt

} #?empty post
header('Location: ../../index.php#anmelden');
?>