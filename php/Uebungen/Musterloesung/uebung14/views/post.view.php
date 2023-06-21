<?php
$stmt = $db->prepare('SELECT * FROM `posts` ORDER BY `id` DESC'); 
$stmt->execute();
$posts = $stmt->fetchAll();
#-----------------------------
$stmtCount = $db->prepare('SELECT count(*) AS `anzahl` FROM `posts`');
$stmtCount->execute();
$resultCount = $stmtCount->fetch()['anzahl'];
?>
<div class="col-md-12">
<h2>Gästebuch (<?= $resultCount?> comments)</h2>
<?php foreach($posts AS $post):?>
<div class="card my-2 bg-danger bg-opacity-25">
 <div class="card-header">
	<div class="row">
		<h3 class="col-md-6 text-dark"><?= e($post['title'])?></h3>
		<span class="col-md-6 name text-end">von: <b><?= e($post['name'])?></b></span>
	</div>
 </div>
 <div class="card-body">
	<?php 
		$id = $post['id'];
		echo textTeaser(e($post['comment']))
	?>
</div>
 <div class="card-footer"><small>Geschrieben am: <em><?= e($post['created_at'])?></em></small></div>
</div>
<?php endforeach;?>
</div>