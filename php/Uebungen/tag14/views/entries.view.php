<?php
$stmt = $db->prepare('SELECT * FROM `posts` ');
$stmt->execute();
$posts = $stmt->fetchAll();
print_r($posts);
?>