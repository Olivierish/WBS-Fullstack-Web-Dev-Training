<!DOCTYPE html>
<html lang="de">
<head>
	<title>Formulare</title>
	<meta charset="utf-8" />
</head>
<body>
<div>

		<!--Formular-->
		<form action="" method="post">
		<!--radioButton++++++++++++++++++++++++++++-->
		<p>
			Herr
			<input  type="radio"  />
			Frau
			<input type="radio"  />
		</p>
		<!--einzeiligeEingabeFelder++++++++++++++-->
		<p>Name: 
			<input  type="text"  />
		</p>
		<p>Vorname: 
			<input type="text"  />
		</p>
		<p>Strasse: 
			<input type="text"  />
		</p>
		<p>PLZ: 
			<input type="text" />
		</p>
		<p>Wohnort: 
			<input type="text"  />
		</p>
		<!--checkBoxen+++++++++++++++++++++++++++++-->
		<h2>Fachgebiet:</h2>
		<p>
			Java<input type="checkbox"  />
			PHP<input type="checkbox" />
			CSS<input type="checkbox"  />
			MySql<input type="checkbox" />
		</p>
		<!--radioButton++++++++++++++++++++++++++++-->
		<h2>Wie bewerten Sie den Dozenten?</h2>
		<p>
			Schlecht
			<input type="radio"  />
			Sehr schlecht
			<input type="radio"  /><br />
			Es geht
			<input type="radio"  />
			Gibts was besseres
			<input type="radio"  />
		</p>
		<!--selectAuswahl+++++++++++++++++++++++++++-->
		<h2>Gratisgeschenk:</h2>
		<p>
			<select>
				<option>Urlaub mit dem Dozent</option>
				<option>Note 1. im Programmieren</option>
				<option>Gar nichts</option>
			</select>
		</p>
		<!--submitButton+++++++++++++++++++++++++++++-->
		<button type="submit">Daten senden</button>
	</form>
</div>
		
</body>
</html>