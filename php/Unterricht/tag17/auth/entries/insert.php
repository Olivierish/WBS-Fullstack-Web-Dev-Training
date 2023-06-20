<?php 
session_start();
// print_r($_POST);
// require_once '../../inc/db_connect.php';

// echo dirname(__DIR__,2);

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

if (!empty($_POST)) {
   #Wenn alles ok dann insert 
//    $name = '';
//    if(isset($_POST['name'])) $name = (string) $_POST['name'];
   $titel = '';
   if(isset($_POST['titel'])) $titel = (string) $_POST['titel'];
   $inhalt = '';
   if(isset($_POST['inhalt'])) $inhalt = (string) $_POST['inhalt'];

//    if((!empty($name)) && (!empty($titel)) && (!empty($inhalt))){
   if((!empty($titel)) && (!empty($inhalt))){ #Check the solution!
        $stmt = $db->prepare('INSERT INTO `entries_neu` (`user_id`,`title`,`comment`) VALUES(:id, :titel, :inhalt)');
        $stmt->bindValue('id', $_SESSION['id']);
        $stmt->bindValue('titel', $titel);
        $stmt->bindValue('inhalt', $inhalt);
        $stmt->execute();

        $_SESSION['msg'] = 'Eintrag wurde eingefügt.';

   } else{
    $_SESSION['msg'] = 'Alle  Felder müssen ausgefüllt sein.';
}

}

header('Location: ../../index.php?page=entries');
?>