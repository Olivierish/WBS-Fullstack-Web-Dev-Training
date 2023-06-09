<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" /> 
	<title>PHP</title>
	<style>
* {	margin: 0;padding: 0;box-sizing: border-box;}
		body {font-size: 1.5rem;font-family: Verdana, sans-serif;padding: 1rem;	line-height: 1.5;}
		form {background-color: #3A5FCD;	padding: 1rem;	width: 50%;font-size: 1.5rem; color: #fff;}
		input {	font-size: 1rem; padding: 0.5rem;width: 100%;}
		button[type="submit"] {color: #008B45; width: 100%; margin: 0.2rem 0; padding: 1rem; font-weight: bold;font-size: 2rem;	}
		button[type="reset"] {color: #EE2C2C; width: 100%; margin: 0.2rem 0; padding: 1rem; font-weight: bold;font-size: 2rem;	}
		label {display: block;}
	.antwort {
		width: 50%;
		background-color: #FF4500;
		margin: 1rem 0;
		padding: 2rem;
		font-size: 2rem;
	}
	.error1 {
		color: #CD6889;
	}
	.error {
		color: #f00;
	}
	.ok {
		color: #008b00;
	}
	</style>
</head>
<body>
<h2>switch - case - Anweisung</h2>

<?php
if(isset($_POST["senden"]))
{
	echo "<div class='antwort'>";
	if($_POST["stadt"]=="")
	{
		echo "<p>Bitte die Antwort eingeben</p>";
	}
	else{
		$msg='';
		$city = strtoupper($_POST["stadt"]);
		
		switch($city)
		{
			case "BERLIN": $msg = "Die Antwort \"".$city."\" ist richtig.";break;
			case "HAMBURG": $msg = $city." ist zwar die schönste aber nicht die Hauptstadt Deutschlands";break;
			case "BONN": $msg = $city." ? Sie sind im Schlafmodus."; break;
			default: $msg = "Ihre Antwort \"".$city."\" ist leider falsch.";break;
		}
		echo $msg;
	}
	echo "</div>";
}
?>

<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
	<p>
		<label for="stadt">Wie heisst die Hauptstadt von Deutschland?</label>
		<input type="text" name="stadt" id="stadt" 
				value="<?= $_POST["stadt"] ?? '' ?>" />[Berlin, Hamburg, Bonn]
	</p>
	<button type="submit" name="senden" value="senden">senden</button>
</form>
</body>
</html>