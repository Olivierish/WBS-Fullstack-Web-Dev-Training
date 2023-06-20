<?php
// db_connect.php

// Database config 
$host = "localhost";
$username = "root";
$pwd = "";
$database = "cocktails_webfull_db";
$optionen = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];


try {
    // PDO Object
    $db = new PDO("mysql:host=$host; dbname=$database", $username, $pwd, $optionen);

} catch (PDOException $e) {
    // echo 'Datenbankverbindung fehlgeschlagen';
    echo 'Database connection failed.';
    die("Connection failed: " . $e->getMessage());
}
$db->query('SET NAMES utf8');

?>
