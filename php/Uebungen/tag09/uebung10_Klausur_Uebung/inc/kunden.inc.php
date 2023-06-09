<?php
heading("kundenbg.jpg", "Kunden");

$kunden = array(
    array(
        'geschlecht' => 'm',
        'nachname' => 'Boss',
        'vorname' => 'Hugo',
        'ort' => 'Sylt',
        'mail' => 'hugo@hugo.de',
        'telefon' => '123456789',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Müller',
        'vorname' => 'Anna',
        'ort' => 'Berlin',
        'mail' => 'anna@muller.com',
        'telefon' => '987654321',
    ),
    array(
        'geschlecht' => 'm',
        'nachname' => 'Schmidt',
        'vorname' => 'Max',
        'ort' => 'Hamburg',
        'mail' => 'max@schmidt.com',
        'telefon' => '456789123',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Becker',
        'vorname' => 'Maria',
        'ort' => 'Munich',
        'mail' => 'maria@becker.de',
        'telefon' => '987654321',
    ),
    array(
        'geschlecht' => 'm',
        'nachname' => 'Keller',
        'vorname' => 'Thomas',
        'ort' => 'Cologne',
        'mail' => 'thomas@keller.com',
        'telefon' => '123456789',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Schneider',
        'vorname' => 'Laura',
        'ort' => 'Frankfurt',
        'mail' => 'laura@schneider.com',
        'telefon' => '987654321',
    ),
    array(
        'geschlecht' => 'm',
        'nachname' => 'Fischer',
        'vorname' => 'Markus',
        'ort' => 'Stuttgart',
        'mail' => 'markus@fischer.de',
        'telefon' => '123456789',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Weber',
        'vorname' => 'Sophie',
        'ort' => 'Dresden',
        'mail' => 'sophie@weber.com',
        'telefon' => '987654321',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Schneider',
        'vorname' => 'Laura',
        'ort' => 'Frankfurt',
        'mail' => 'laura@schneider.com',
        'telefon' => '987654321',
    ),
    array(
        'geschlecht' => 'm',
        'nachname' => 'Müller',
        'vorname' => 'Max',
        'ort' => 'Berlin',
        'mail' => 'max.mueller@example.com',
        'telefon' => '123456789',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Schmidt',
        'vorname' => 'Anna',
        'ort' => 'Hamburg',
        'mail' => 'anna.schmidt@example.com',
        'telefon' => '987654321',
    ),
    array(
        'geschlecht' => 'm',
        'nachname' => 'Lehmann',
        'vorname' => 'Simon',
        'ort' => 'Munich',
        'mail' => 'simon.lehmann@example.com',
        'telefon' => '123456789',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Becker',
        'vorname' => 'Julia',
        'ort' => 'Cologne',
        'mail' => 'julia.becker@example.com',
        'telefon' => '987654321',
    ),
    array(
        'geschlecht' => 'm',
        'nachname' => 'Hoffmann',
        'vorname' => 'David',
        'ort' => 'Hannover',
        'mail' => 'david.hoffmann@example.com',
        'telefon' => '123456789',
    ),
    array(
        'geschlecht' => 'w',
        'nachname' => 'Krüger',
        'vorname' => 'Lisa',
        'ort' => 'Dresden',
        'mail' => 'lisa.krueger@example.com',
        'telefon' => '987654321',
    )
);
#------------------------------------------

?>
<div class="col-8 mx-auto">
    <table class="table table-dark table-striped fs-5 mt-5">
<thead>
	<tr>
		<th>Name</th> <th>Wohnort</th> <th>E-Mail</th> <th>Telefon</th>
	</tr>
</thead>
<tbody>
<?php foreach($kunden AS $value): 
	if($value['geschlecht']=='m') {
		$anrede = 'Herr';
		$farbe = 'man';}
	else {
		$anrede = 'Frau';
		$farbe = 'woman';}
?>
	<tr>
		<td><?= '<span class="badge '.$farbe.'">' . $anrede . ' ' . $value['nachname'] . ' ' . $value['vorname'];?></span></td>
		<td><?= $value['ort']; ?></td>
		<td><?= $value['mail']; ?></td>
		<td><?= $value['telefon']; ?></td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
