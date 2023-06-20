<?php
$id = @(int) $_GET['id'];
$stmtCount = $db->prepare('SELECT count(*) AS `anzahl` FROM `posts`');
$stmtCount->execute();
$resultCount = $stmtCount->fetch()['anzahl'];
#------------------------------------
if($id <= 0 || $id > $resultCount || empty($id)) {
	$id = 1;
}
		
$stmt = $db->prepare('SELECT * FROM `posts` WHERE `id`= :number');
$stmt->bindValue(':number', $id,PDO::PARAM_INT);
$stmt->execute();
$post = $stmt->fetch();

?>
<div class="col-md-12 my-2">

<div class="card my-2 bg-danger bg-opacity-25">
 <div class="card-header">
	<div class="row">
		<h3 class="col-md-6 text-dark"><?= e($post['title'])?></h3>
		<span class="col-md-6 name text-end">von: <b><?= e($post['name'])?></b></span>
	</div>
 </div>
 <div class="card-body">
	<?= e($post['comment'])	?>
</div>
 <div class="card-footer"><small>Geschrieben am: <em><?= e($post['created_at'])?></em></small></div>
</div>
<a href="index.php?page=post" class="btn btn-primary float-end">zurück</a>

</div>