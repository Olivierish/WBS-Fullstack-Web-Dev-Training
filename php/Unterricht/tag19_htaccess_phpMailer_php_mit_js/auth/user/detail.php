<?php

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

$id = $_POST['id'];

//echo $id;

$sql = 'SELECT * FROM `users` WHERE `id` = ?';
$st  = $db->prepare($sql);
$st->execute([$id]);
$daten = $st->fetch();
?>
<article class="text-light">
  <h2 class="bg-dark p-2 m-0"><?= $daten['nachname'] . ', ' . $daten['vorname']?></h2>
  <p class="bg-primary p-2 m-0">Motto: <?= $daten['motto']?></p>
  <p class="bg-success p-2 m-0"><?= $daten['info']?></p>
</article>