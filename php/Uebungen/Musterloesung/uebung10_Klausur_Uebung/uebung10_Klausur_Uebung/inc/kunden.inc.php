<?php
$kunden = [
	[
		'geschlecht' => 'm',
		'nachname' => 'Boss', 
		'vorname' => 'Hugo',
		'ort' => 'Sylt',
		'mail' => 'hugo@hugo.de',
		'telefon' => '123456789',
	],
	[
		'geschlecht' => 'w',
		'nachname' => 'Merkel',
		'vorname' => 'Anna',
		'ort' => 'Paris',
		'mail' => 'anna@anna.de',
		'telefon' => '123456789',
	],
	[
		'geschlecht' => 'm',
		'nachname' => 'Mustermann',
		'vorname' => 'Max',
		'ort' => 'Algarve',
		'mail' => 'max@max.de',
		'telefon' => '123456789',
	],
	[
		'geschlecht' => 'w',
		'nachname' => 'Hallmackenreuther',
		'vorname' => 'Hilde',
		'ort' => 'St. Peter Ording',
		'mail' => 'hilde@hilde.de',
		'telefon' => '123456789',
	]
];
#------------------------------------------
?>
<table class="table table-dark table-striped fs-5">
<caption class="bg-dark caption-top text-white fw-bold p-2 text-center fs-4">
	Unsere Kunden
</caption>
<thead>
	<tr>
		<th>Name</th> <th>Wohnort</th> <th>E-Mail</th> <th>Telefon</th>
	</tr>
</thead>
<tbody>
<?php foreach($kunden AS $value): 
	if($value['geschlecht']=='m') {
		$anrede = 'Herr';
		$farbe = 'primary';}
	else {
		$anrede = 'Frau';
		$farbe = 'warning';}
?>
	<tr>
		<td><?= '<span class="badge bg-'.$farbe.'">' . $anrede . ' ' . $value['nachname'] . ' ' . $value['vorname'];?></span></td>
		<td><?= $value['ort']; ?></td>
		<td><?= $value['mail']; ?></td>
		<td><?= $value['telefon']; ?></td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>