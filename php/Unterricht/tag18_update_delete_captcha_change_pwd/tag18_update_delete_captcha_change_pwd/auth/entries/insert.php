<?php

session_start();

#../../inc/db_connect.php 
#echo dirname(__DIR__, 2);

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

#print_r($_POST);

if(!empty($_POST)) {
  $titel = '';
  if(isset($_POST['titel']))  $titel = (string) $_POST['titel'];
  $inhalt = '';
  if(isset($_POST['inhalt'])) $inhalt = (string) $_POST['inhalt'];

  if(!empty($titel) && !empty($inhalt)) {
    //wenn alles ok dann insert

   $stmt = $db->prepare('INSERT INTO `entries_neu` (`user_id`,`title`,`comment`) 
                                          VALUES(:id, :titel, :inhalt)');
   $stmt->bindValue(':id', $_SESSION['id']);
   $stmt->bindValue(':titel', $titel);
   $stmt->bindValue(':inhalt', $inhalt);
   $stmt->execute();
   #eine Meldung ausgeben, dass alles geklappt hat
   $_SESSION['msg'] = 'Eintrag wurde eingefügt';
  } else {
    #eine Meldung ausgeben, dass Fehler da ist
    $_SESSION['msg'] = 'Alle Felder müssen ausgefüllt sein.';
  }

}
#Weiterleitung zur Siete Gästebuch
header('Location: ../../index.php?page=entries');