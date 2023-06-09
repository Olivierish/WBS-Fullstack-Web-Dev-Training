<!DOCTYPE html>
<html lang="de">
<head>
	<title>PHP</title>
	<meta charset="utf-8" /> 
	<style>
	* {	margin: 0;padding: 0;	box-sizing: border-box;}
	body {
		font-family: Verdana,sans-serif;
		font-size: 1rem;	padding: 1rem;
	}
	h1 {	color: #cd0000;	}
	p {	width: 30%;
		background-color: #ccc;
	}
	strong {	color: #cd0000;	}
	
	.table {
		background-color: #ccc;
		width: 50%;
		margin: 1rem 0;
	}
	
	.table table{
		width: 100%;
		border-collapse: collapse;
	}
	table caption {
		padding: 1rem 2rem;
		color: #cd0000;
		background-color: #efefef;
		font-size: 2rem;
	}
	table th {
		border: solid 1px #ddd;
		padding: 1rem 2rem;
		background: #cd0000;
		color: #fff;
	}
	table td {
		border: solid 1px #ddd;
		padding: 0.2rem 2rem;
	}
	
	.gerade td {
		background: #00bfbf;
	}
	
	.ungerade td {
		background: #ffc;
	}
	</style>
</head>
<body>
<h1>Tankstelle WebDev</h1>

<?php
$literBenzin=1.75;
$literDiesel=1.80;
?>
<h2>for-Schleife</h2>
<?php
for($i= 1 ; $i <= 10; $i++){
	echo "<p><strong>". $i, "</strong> Liter Benzin kostet <strong>".$literBenzin * $i."</strong> Euro</p>";
}
?>
<h2>while-Schleife</h2>
<?php
$liter=1;

while($liter < 11){
	echo "<p><strong>". $liter, "</strong> Liter Benzin kostet <strong>".$literBenzin * $liter."</strong> Euro</p>";
	$liter++;
}
//+++++++++++++++++++++++++++++++++++++++++
?>
<div class="table">
<table>
<caption>Tankstelle - aktuelle Tagespreise</caption>
<thead>
	<tr>
		<th>Liter</th> <th>Benzin €</th> <th>Diesel €</th>
	</tr>
</thead>
<tbody>
<?php for($i = 1; $i <= 20; $i++):?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= number_format(($literBenzin * $i), 2, ',', '.'); ?></td>
		<td><?= number_format(($literDiesel * $i), 2, ',', '.'); ?></td>
	</tr>
<?php endfor;?>
</tbody>
</table>
</div>
<!--+++++++++++++++++++++++++++++++++++++++++++++-->
<div class="table">
<table>
<caption>Tankstelle - aktuelle Tagespreise</caption>
<thead>
	<tr>
		<th>Liter</th> <th>Benzin €</th> <th>Diesel €</th>
	</tr>
</thead>
<tbody>
<?php for($i = 1; $i <= 20; $i++):
	if($i % 2 === 0) {
		$zeile = 'gerade';
	} else {
		$zeile = 'ungerade';
	}

?>
	<tr class="<?= $zeile;?>">
		<td><?= $i; ?></td>
		<td><?= number_format(($literBenzin * $i), 2, ',', '.'); ?></td>
		<td><?= number_format(($literDiesel * $i), 2, ',', '.'); ?></td>
	</tr>
<?php endfor;?>
</tbody>
</table>
</div>
</body>
</html>