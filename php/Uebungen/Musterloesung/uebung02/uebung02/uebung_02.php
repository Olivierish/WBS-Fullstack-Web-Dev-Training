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
		margin: 1rem 0;
		display: table;
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

<?php
$daten = ['tom', 'JeRRy', 'MaX', 'HUGO','Marvel'];

?>
<div class="table">
<table>
<caption>for-Schleife</caption>
<thead>
	<tr><th>Nr.</th> <th>Name (default)</th></tr>
</thead>
<tbody>
<?php for($i= 0 ; $i < count($daten); $i++):?>
	<tr>
		<td><?= ($i + 1); ?></td>
		<td><?= $daten[$i]; ?></td>
	</tr>
<?php endfor;?>
</tbody>
</table>
</div>
<!--+++++++++++++++++++++++++++++++++++++++++++++-->
<div class="table">
<table>
<caption>for-Schleife</caption>
<thead>
	<tr>
		<th>Nr.</th> <th>Name</th> 
		<th>Name(Groß)</th> <th>Name(Klein)</th>
		<th>Anzahl der Zeichen</th>
		<th>1.Buchstabe Groß</th>
		<th>1.Buchstabe ; letzter Buchstabe</th>
	</tr>
</thead>
<tbody>
<?php 
$laenge = 0;
$wort = '';
for($i= 0 ; $i < count($daten); $i++):
?>
	<tr>
		<td><?= ($i + 1); ?></td>
		<td><?= $daten[$i]; ?></td>
		<td><?= strtoupper($daten[$i]); ?></td>
		<td><?= strtolower($daten[$i]); ?></td>
		<td><?= strlen($daten[$i]); ?></td>
		<td><?= ucfirst(strtolower($daten[$i])); ?></td>
		<td><?= strtoupper(substr($daten[$i],0, 1)); ?>****<?= strtolower(substr($daten[$i],-1, 1)); ?></td>
	</tr>
<?php endfor;?>
</tbody>
</table>
</div>
<!--+++++++++++++++++++++++++++++++++++++++++++++-->
</body>
</html>