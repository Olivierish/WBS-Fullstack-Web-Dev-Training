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
		line-height: 1.5;
	}
	h2 {
		padding: 1rem;
	}
	.daten {
		display: flex;
		flex-wrap: wrap;
	}
	ul {
		background-color: #ccc;
		margin: 1rem;
		list-style: none;
		padding: 0.4rem;
		width: 40%;
		border-radius: 10px;
	}
	.frau {
		background-color: rgba(255,20,147,0.6);
	}
	.herr {
		background-color: rgba(139,117,0,0.6);
	}
	ul li{
		border-bottom: solid 1px #fff;
	}
	ul li:nth-last-of-type(1){
		border-bottom: none;
	}
	ul li p {
		color: #3f3f3f;
		padding-left: 1rem;
	}
	@media (max-width: 576px) {
		ul {
			width: 100%;
		}
	}
	@media (max-width: 768px) {
		ul {
			width: 100%;
		}
	}
	</style>
</head>
<body>

<?php
$daten = [
	[
		'anrede' => 'herr',
		'name' => 'tom',
		'city' => 'Hamburg',
		'age' => '25',
		'interests' => ['PHP','JavaScript','Laravel'],
	],
	[
		'anrede' => 'frau',
		'name' => 'anna',
		'city' => 'Berlin',
		'age' => '22',
		'interests' => ['React','JSON','XML','Vue.js'],
	],
	[
		'anrede' => 'herr',
		'name' => 'jerry',
		'city' => 'Paris',
		'age' => '35',
		'interests' => ['HTML','CSS'],
	],
	[
		'anrede' => 'frau',
		'name' => 'helene',
		'city' => 'Palma',
		'age' => '21',
		'interests' => ['PHP','CMS','Photoshop','Laufen','Malen'],
	]
];

?>

<h2>foreach-Schleife</h2>
<div class="daten">

<?php foreach($daten AS $value):?>
	<ul class="<?= strtolower($value['anrede']);?>">
		<li><b><?= strtoupper($value['anrede'] .' '.$value['name']); ?></b></li>
		<li>Wohnort: <?= $value['city']; ?></li>
		<li>Alter: <?= $value['age']; ?>j.</li>
		<li>Interessen (<?= count($value['interests']) ?>): 
			<?php
				foreach($value['interests'] AS $interes):
					echo '<p>'. $interes .'</p>';
				endforeach;
			?>
		</li>
	</ul>
<?php endforeach;?>
</div>
<!--+++++++++++++++++++++++++++++++++++++++++++++-->
</body>
</html>