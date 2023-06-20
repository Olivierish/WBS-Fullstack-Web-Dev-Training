
<div class="col-12">
<h2 class="display-5 text-center"><?php echo mb_strtoupper('Gästebuch', 'UTF-8');?></h2>
<!--##############################################-->
<form action="auth/entries/insert.php" method="POST" class="rounded-1 p-2 bg-success bg-opacity-25">
<div class="p-1">
	<input type="text" name="name" class="form-control my-1" placeholder="Name eingeben..."	value = "" />
	<input type="text" name="titel" class="form-control my-1" placeholder="Titel eingeben..."	value = "" />
	<textarea  name="inhalt" cols="10" rows="5" placeholder="Kommentar eingeben..." class="form-control my-1"></textarea>
</div>
<div class="my-1 text-center">
	<!--Alle dürfen die Kommentare sehen.
    Nur angemeldete User dürfen Kommentare verfassen --> 
	<?php if(isset($_SESSION['id']) && isset($_SESSION['login'])):?>
	<input type="submit" value="Absenden" class="btn btn-success fw-bold" />
	<input type="reset" value="Löschen"  class="btn btn-danger fw-bold" />
	<?php else:?>
		<p class="alert alert-primary my-2 fw-bold">
		<!--für die nicht angemeldeten User wird diese Meldung angezeigt --> 
			Nach der Anmeldung, können Sie sich ins Gästebuch verewigen
		</p>
	<?php endif;?>
</div>
</form>
<!--##############################################-->
<hr class="hr my-4 text-dark border-3" />
<!--##############################################-->
<?php
#Anzahl der Datensätzen ermitteln
$stmtAnzahl = $db->prepare('SELECT count(*) AS `anzahl` FROM `entries` ');
$stmtAnzahl -> execute();
#$resultAnzahl = $stmtAnzahl->fetch();
$resultAnzahl = $stmtAnzahl->fetch()['anzahl'];
$pro_seite = 15;
#Anzahl der Datensätze pro Seite verteilen
#									20         /   3
$anzahlSeiten = ceil($resultAnzahl / $pro_seite);

$aktSeite = 1;
if(isset($_GET['seite'])) {
	$aktSeite = (int) $_GET['seite'];
	if($aktSeite <= 0 || $aktSeite > $anzahlSeiten) {
		$aktSeite = 1;
	}
}
?>
<h2>Anzahl der Kommentare 
(
	<?php # echo $resultAnzahl['anzahl']?>

	<?php echo $resultAnzahl?> 
) 
</h2>
<!--##############################################-->
<?php
$stmt = $db->prepare('SELECT * FROM `entries` ORDER BY `id` DESC LIMIT :anfang, :proSeite');
$stmt->bindValue('proSeite', $pro_seite, PDO::PARAM_INT);
$stmt->bindValue('anfang', ($aktSeite -1) * $pro_seite, PDO::PARAM_INT);
$stmt->execute();
$posts = $stmt->fetchAll();
#--------------------------------

?>
<!--##############################################-->
<div class="row">
<div class="col-12 p-2">
<?php foreach($posts AS $post):?>
	<?php
		$absatz = explode("\n", $post['comment']);
		$filterAbsatz = [];
		$result;
    #++++++++++++++++++++++++++++++++
		foreach($absatz AS $value):
			$value = trim($value); 
			if(strlen($value) > 0) {
				$filterAbsatz[] = $value;
			}
		endforeach;
    #++++++++++++++++++++++++++++++++
	?>
<div class="card p-0 my-2 col-md-12 bg-primary bg-opacity-75 bg-light">
	<div class="card-header">
		<div class="row">
			<h3 class="col-md-6 text-dark"><?= e($post['title'])?></h3>
			<span class="col-md-6 name text-end"><?= e($post['name'])?></span>
		</div>
	</div>
	<div class="card-body">
		<?php
      #++++++++++++++++++++++++++++++++
			foreach($filterAbsatz AS $element):
				echo '<p>' . $element . '</p>';
			endforeach;
      #++++++++++++++++++++++++++++++++
		?>
	</div>
</div>
<?php endforeach;?>
<!--##############################################-->
<div class="row p-2">
<!--wenn Anzahl der Seiten weniger als 2 dann keine Links erstellen -->
<?php if($anzahlSeiten > 1):?>
<nav class="my-2 p-0">
	<ul class="pagination">
		<?php for($i = 1; $i <= $anzahlSeiten; $i++ ):?>
			<li class="page-item  <?= ($i === $aktSeite ) ? 'active' : ''	?> ">
				<a href="index.php?page=entries&seite=<?= $i?>" class="page-link"><?= $i?></a>
			</li>
		<?php endfor;?>
	</ul>
</nav>
<?php endif;?>
	

</div>
</div>
</div>
<!--##############################################-->
</div>
