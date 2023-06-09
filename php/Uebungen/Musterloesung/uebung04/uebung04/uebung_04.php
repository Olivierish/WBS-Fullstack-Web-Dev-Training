<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Rechner</title>
	<link rel="stylesheet" type="text/css" href="uebung_04.css" /> 
</head>
<body>
<form action="uebung_04.php" method="post" id="form_rechner">
	<fieldset><legend>Persönlich</legend>
			<div>
				<label for="name">Name</label>
				<input type="text" name="name" id="name" placeholder="Name eingeben" />
			</div>
			<div>
				<label for="vorname">Vorname</label>
				<input type="text" name="vorname" id="vorname" placeholder="Vorname eingeben" />
			</div>
		</fieldset>
		<fieldset><legend>Multiplikation</legend>
			<div class="inline">
				<label for="zahl1">Zahl1</label>
				<input type="text" name="zahl1" id="zahl1" size="10" placeholder="Zahl eingeben" />
					<b>x</b> 
				<label for="zahl2">Zahl2</label>
				<input type="text" name="zahl2" id="zahl2" size="10" placeholder="Zahl eingeben" />
			</div>
		</fieldset>
		
		<fieldset><legend>Währung (€ to $)</legend>
		<div>
			<label for="euro">Euro</label>
			<input type="text" name="euro" id="euro" placeholder="Zahl eingeben" />	
		</div>
		</fieldset>
		<button type="submit" name="ausgabe">ausgabe</button>
		<button type="reset" id="delete" name="delete">löschen</button>
</form>
<div class="ausgabe">
<?php
if(isset($_POST['ausgabe']))
{
	if(empty($_POST['name']) || empty($_POST['vorname'])) {
		echo 'Bitte persönliche Daten eingeben.<br />';
	}
	if(empty($_POST['zahl1']) || empty($_POST['zahl2']) ) {
		echo 'Multiplikation: Bitte eine Zahl eingeben.<br />';
	}
	else if(!is_numeric($_POST['zahl1']) || !is_numeric($_POST['zahl2']) ) {
		echo 'Multiplikation: Nur Zahlen sind erlaubt.<br />';
	}
	if(empty($_POST['euro'])) {
		echo 'Bitte eine Zahl im Feld-€ eingeben.<br />';
	}
	else if(!is_numeric($_POST['euro'])) {
		echo 'Feld-€ darf nur Zahlen haben.<br />';
	}
	else {
		$name = $_POST['name'];
		$vorname = $_POST['vorname'];
		$zahl1 = $_POST['zahl1'];
		$zahl2 = $_POST['zahl2'];
		$euro = $_POST['euro'];
		#---------------------------
		if($euro > 1) {
			$ist = ' sind ';
		} else {
			$ist = ' ist ';
		}
		#---------------------------
		echo 'Vielen Dank ' .$name. ', '. $vorname. '<br />';
		echo $zahl1.' x ' .$zahl2. ' = ' .($zahl1 * $zahl2). '<br />';
		echo $euro. '€ ' .$ist. ' gleich ' .($euro *1.10). '$';
	}
}

?>
</div>
<script>
let myForm = document.querySelector("#form_rechner");
myForm.addEventListener('reset', function(e) {
	 document.querySelector('.ausgabe').innerHTML = '';
});
</script>
</body>
</html>