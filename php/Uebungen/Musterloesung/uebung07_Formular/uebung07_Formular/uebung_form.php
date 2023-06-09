<!DOCTYPE html>
<html lang="de">
<head>
	<title>Formulare</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="master.css" /> 
</head>
<body>
<div id="formular">
		<div class="fehler">
			<?php require_once("form_auswertung.php");?>
		</div>
		<!--Formular-->
		<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
		<!--radioButton++++++++++++++++++++++++++++-->
		<p class="klein">
			Herr
			<input <?php if(isset($_POST["anrede"]) && $_POST["anrede"]=="Herr"){echo "checked='checked'";}?> type="radio" name="anrede" value="Herr" />
			Frau
			<input <?php if(isset($_POST["anrede"]) && $_POST["anrede"]=="Frau"){echo "checked='checked'";}?> type="radio" name="anrede" value="Frau" />
		</p>
		<!--einzeiligeEingabeFelder++++++++++++++-->
		<p>Name: 
			<input value="<?= $_POST["nn"] ?? '' ?>" type="text" name="nn" />
		</p>
		<p>Vorname: 
			<input value="<?= $_POST["vn"] ?? '' ?>" type="text" name="vn" />
		</p>
		<p>Strasse: 
			<input value="<?= $_POST["str"] ?? '' ?>" type="text" name="str" />
		</p>
		<p>PLZ: 
			<input value="<?= $_POST["plz"] ?? '' ?>" type="text" name="plz" />
		</p>
		<p>Wohnort: 
			<input value="<?= $_POST["ort"] ?? '' ?>" type="text" name="ort" />
		</p>
		<!--checkBoxen+++++++++++++++++++++++++++++-->
		<h2>Fachgebiet:</h2>
		<p class="klein">
			Java<input type="checkbox" name="fach[]" value="Java" <?php if(isset($_POST["fach"])){daten($_POST["fach"],"Java");}?> />
			PHP<input type="checkbox" name="fach[]" value="php" <?php if(isset($_POST["fach"])){daten($_POST["fach"],"php");}?> />
			CSS<input type="checkbox" name="fach[]" value="css" <?php if(isset($_POST["fach"])){daten($_POST["fach"],"css");}?> />
			MySql<input type="checkbox" name="fach[]" value="mysql" <?php if(isset($_POST["fach"])){daten($_POST["fach"],"mysql");}?> />
		</p>
		<!--radioButton++++++++++++++++++++++++++++-->
		<h2>Wie bewerten Sie den Dozenten?</h2>
		<p class="klein">
			Schlecht
			<input type="radio" name="bewertung" value="schlecht" <?php if(isset($_POST["bewertung"]) && $_POST["bewertung"]=="schlecht"){echo "checked='checked'";}?> />
			Sehr schlecht
			<input type="radio" name="bewertung" value="sehr schlecht" <?php if(isset($_POST["bewertung"]) && $_POST["bewertung"]=="sehr schlecht"){echo "checked='checked'";}?> /><br />
			Es geht
			<input type="radio" name="bewertung" value="es geht" <?php if(isset($_POST["bewertung"]) && $_POST["bewertung"]=="es geht"){echo "checked='checked'";}?> />
			Gibts was besseres
			<input type="radio" name="bewertung" value="gibts bessere" <?php if(isset($_POST["bewertung"]) && $_POST["bewertung"]=="gibts bessere"){echo "checked='checked'";}?> />
		</p>
		<!--selectAuswahl+++++++++++++++++++++++++++-->
		<h2>Gratisgeschenk:</h2>
		<p>
			<select name="geschenk[]">
				<option <?php if(isset($_POST["geschenk"])){datenselect($_POST["geschenk"],"Urlaub mit dem Dozent");}?> value="Urlaub mit dem Dozent">Urlaub mit dem Dozent</option>
				<option <?php if(isset($_POST["geschenk"])){datenselect($_POST["geschenk"],"Note 1. im Programmieren");}?> value="Note 1. im Programmieren">Note 1. im Programmieren</option>
				<option <?php if(isset($_POST["geschenk"])){datenselect($_POST["geschenk"],"Gar nichts");}?> value="Gar nichts">Gar nichts</option>
			</select>
		</p>
		<!--submitButton+++++++++++++++++++++++++++++-->
		<button type="submit" name="bt">Daten senden</button>
	</form>
</div>
	
</body>
</html>