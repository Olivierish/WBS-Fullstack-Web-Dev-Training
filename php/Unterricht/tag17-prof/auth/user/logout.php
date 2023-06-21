<?php 

session_start();

//ein einzelnes Element mit unset() leeren bzw löschen 
unset($_SESSION['vorname']);
unset($_SESSION['id']);
unset($_SESSION['login']);

//wenn session_destroy dann kann man unset() auch weglassen
#dann werden alle sessionVariablen gelöscht und die untere auch nicht angezeigt
#oder toke-session
#session_destroy();

$_SESSION['msg'] = 'Du bist abgemeldet!';
header('Location:../../index.php');