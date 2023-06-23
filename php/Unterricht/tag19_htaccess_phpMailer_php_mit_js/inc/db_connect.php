<?php 

$optionen = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
try {
  $db = new PDO('mysql:host=localhost;dbname=db_php_webfull02','root','',$optionen); 
}
catch(PDOException $e) {
  echo 'Datenbankverbindung fehlgeschlagen';
  die();
}

$db->query('SET NAMES utf8');

