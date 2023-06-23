<?php
require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

$id = $_POST['id'];


$sql = 'SELECT * FROM `users` WHERE `id` = ?';
$st  = $db->prepare($sql);
$st->execute([$id]);
$daten = $st->fetch();
?>
<article>
  <h2 class="bg-dark text-light p-2"><?= $daten['nachname'] . ', ' . $daten['vorname']?></h2>
  <p>Motto: <?= $daten['motto']?></p>
  <p><?= $daten['info']?></p>
</article>