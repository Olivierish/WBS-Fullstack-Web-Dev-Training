<?php

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

//data: {benutzerName: feldName, benutzerWert: value, benutzerId: feldId}
//type: "post"

//["name",5] ["motto",5] ["ueber_mich",5]
//text, der aktuell da steht (design follws function) 

//die Variablen kommen von JS-Datei
$benutzerName = trim($_POST['benutzerName']);
$benutzerWert = trim($_POST['benutzerWert']);
$benutzerId = trim($_POST['benutzerId']);

if(isset($benutzerName) && isset($benutzerWert) && isset($benutzerId)) {
  $sql = 'UPDATE `users` SET '.$benutzerName.' = ? WHERE `id` = ?';
  $st = $db->prepare($sql);
  $st->execute([$benutzerWert,$benutzerId]);
}

header('Location: ../../index.php?page=about');

/*
$sql = 'UPDATE users SET '.$benutzerName.' = ? WHERE id = ?';
$st->execute([$benutzerWert, $benutzerId]);
-------------------------------------------------
wenn mit Name was gemacht wird dann:
$sql = 'UPDATE users SET name = ? WHERE id = ?';
$st->execute([$benutzerWert, $benutzerId]);
-------------------------------------------------
wenn mit motto was gemacht wird dann:
$sql = 'UPDATE users SET motto = ? WHERE id = ?';
$st->execute([$benutzerWert, $benutzerId]);


$st->execute([Variable für den 1.Platzhalter, Variable für den 2.Platzhalter]);
-------------------------------------------------
<h2 id="name-<?= $daten['id']?>" class="edit"></h2>
<p id="motto-<?= $daten['id']?>" class="edit"></p>
name-16
motto-16
let feldName = teilenId[0];  name oder motto
let feldId = teilenId[1];   16
let value = $(this).text(); der aktuelle Inhalt des Feldes

*/