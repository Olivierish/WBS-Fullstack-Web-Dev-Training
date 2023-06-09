<form action="<?= $_SERVER["PHP_SELF"];?>?page=reisen" method="POST">
<div class="p-1">
	<input type="text" name="search" class="form-control" placeholder="Stadtsuche...(beginnt mit ...)" />
	<input type="submit" value="suche" name="btn" class="btn btn-success fw-bold my-1" /> 
</div>
</form>
<?php
$cities = [
	[
		'titel' => 'Paris',
		'einwohner' => '2 000 000',
		'fläche' => '105 km²',
		'info' => 'Mit einer vergleichsweise kleinen Stadtfläche von 105,40 Quadratkilometern ist Paris mit 20.371 Einwohnern pro Quadratkilometer die am dichtesten besiedelte Großstadt Europas.',
	],
	[
		'titel' => 'Porto',
		'einwohner' => '238 000',
		'fläche' => '42 km²',
		'info' => 'Zusammen mit Vila Nova de Gaia am gegenüberliegenden Ufer des Douro bildet sie den Kern der Metropolregion Porto, in der 1,76 Millionen Menschen leben, und ist das wirtschaftliche und kulturelle Zentrum Nordportugals sowie die zweitgrößte Agglomeration des Landes. Das historische Zentrum gehört heute zum UNESCO-Weltkulturerbe.',
	],
	[
		'titel' => 'Hamburg',
		'einwohner' => '1 800 000',
		'fläche' => '755 km²',
		'info' => 'Hamburg ist mit rund 1,85 Millionen Einwohnern die zweitgrößte Stadt Deutschlands und die drittgrößte im deutschen Sprachraum. Mit rund 755 Quadratkilometern ist Hamburg die zweitgrößte Gemeinde Deutschlands. Das Stadtgebiet ist in sieben Bezirke und 104 Stadtteile gegliedert,darunter mit dem Stadtteil Neuwerk eine in der Nordsee gelegene Inselgruppe.',
	],
	[
		'titel' => 'Amsterdam',
		'einwohner' => '922 000',
		'fläche' => '220 km²',
		'info' => 'Die Gemeinde Amsterdam hat 921.468 Einwohner (Stand: 1. Januar 2023) und als Agglomeration Groot-Amsterdam 1.459.493 Einwohner (Stand: 1. Januar 2023).Während sich der Regierungssitz des Landes sowie die Königsresidenz sowie auch der Hohe Rat (oberstes Gericht für Zivil-, Straf- und Steuerrecht), der Staatsrat (oberstes Gericht für Verwaltungsrecht) und alle Ministerien und Botschaften im 60 Kilometer entfernten Den Haag befinden, ist Amsterdam seit 1983 gemäß niederländischer Verfassung die Hauptstadt der Niederlande.',
	],
];
if(isset($_POST['btn']) && !empty($_POST['search'])):
$filter = [];
foreach($cities AS $value) {
	if(strtolower($value['titel'][0]) === strtolower($_POST['search'][0])) {
		$filter[] = $value;
	}
}
if(!empty($filter)):
	foreach($filter AS $city):?>
	<ul class="list-group my-2 list-group-item-primary">
			<li class="list-group-item"><b><?= $city['titel']?></b></li>
			<li class="list-group-item"><b>Anzahl der Einwohner: </b><?= $city['einwohner']?></li>
			<li class="list-group-item"><b>Fläche der Stadt: </b><?= $city['fläche']?></li>
			<li class="list-group-item"><?= $city['info']?></li>
	</ul>
<?php 
	endforeach;
else:
echo 'Leider nichts gefunden';
endif;


endif; #ende isset
?>
