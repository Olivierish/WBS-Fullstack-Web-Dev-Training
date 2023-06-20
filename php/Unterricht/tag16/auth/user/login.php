<?php 
session_start();
require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

if(!empty($_POST)){
    $mail="";
    if(isset($_POST['mail'])) $mail = (string) $_POST['mail'];
    $pwd="";
    if(isset($_POST['pwd'])) $pwd = (string) $_POST['pwd'];
    $csrf="";
    if(isset($_POST['csrf_token'])) $csrf = (string) $_POST['csrf_token'];

    if(!empty($mail) && !empty($pwd)){
        $stmt = $db -> prepare('SELECT * FROM `users` WHERE `email` = :mail');
        $stmt -> bindValue(':mail', $mail);
        $stmt -> execute();
        $result = $stmt -> fetch();

        if($result && password_verify($pwd, $result['password']) && $csrf === $_SESSION['token']){           
            $_SESSION['vorname'] = $result['vorname'];
            $_SESSION['id'] = $result['id'];
            $_SESSION['login'] = true;

            $_SESSION['msg'] = 'Login erfolgreich.';

            unset($_SESSION['token']);
        }
        else{
            $_SESSION['msg'] = "Falsche Login!";
            
        }

    } else{
        $_SESSION['msg'] = "Felder dürfen nicht leer sein.";
      }
}

redirect('../../index.php');
?>