<?php 
function e($value){
    return htmlspecialchars($value, ENT_QUOTES,'UTF-8',true);
}

function redirect($url){
    header('Location:'.$url);
    exit();
}

function csrf_token(){
    $csrfToken = bin2hex(random_bytes(64));
    if(!isset($_SESSION['token']) || empty($_SESSION['token'])){
        $_SESSION['token'] = $csrfToken;
    }
    return $_SESSION['token'];
}

function formatiereDatum($dbDatum, $format = 'd.m.Y H:i'){
    $datum_db = new DateTime($dbDatum);
    return $datum_db->format($format);
}

?>