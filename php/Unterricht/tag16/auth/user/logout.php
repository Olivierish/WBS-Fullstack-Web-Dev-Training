<?php 
session_start();

    unset($_SESSION['vorname']);
    unset($_SESSION['id']);
    unset($_SESSION['login']);
    

    $_SESSION['msg'] = 'Du bist abgemeldet.'.$_SESSION['vorname'];
    header('Location:../../index.php');

?>