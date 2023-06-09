<!DOCTYPE html>
<html lang="de">
<head>
	<title>PHP</title> 
	<style>
		* {	margin: 0;padding: 0;box-sizing: border-box;}
		body {font-size: 1.5rem;font-family: Verdana, sans-serif;padding: 1rem;	line-height: 1.5;}
		form {background-color: #3A5FCD;	padding: 1rem;	width: 50%;font-size: 1.5rem; color: #fff;}
		input {	font-size: 1rem; padding: 0.5rem;}
		button[type="submit"] {color: #008B45; width: 100%; margin: 0.2rem 0; padding: 1rem; font-weight: bold;font-size: 2rem;	}
		button[type="reset"] {color: #EE2C2C; width: 100%; margin: 0.2rem 0; padding: 1rem; font-weight: bold;font-size: 2rem;	}
		table{background-color: #fff; font-size: 1.5rem;margin: 1rem 0;}
		table tr td {background-color: #ffc;	padding: 0.5rem 1rem;}
		em {font-weight: bold;color: #cd0000;}
	</style>

</head>
<body>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post" id="form1">
	<p>Bitte eine Zahl eingeben: <input type="text" name="zahl1" /></p>
	<p>Bitte eine Zahl eingeben: <input type="text" name="zahl2" /></p>
	
	<p>
		<button type="submit" name="btn" value="senden">senden</button>
		<button type="reset" value="Daten löschen" >Daten löschen</button>
	</p>
	
</form>
<?php
if(isset($_POST["btn"]))
{
	echo '<div class="ausgabe">';
	
	if(!is_numeric($_POST["zahl1"]) || !is_numeric($_POST["zahl2"]) || $_POST["zahl1"] < 1 || $_POST["zahl2"] < 1) {
		echo "Bitte eine Zahl eingeben (größer als 0).<br />";
	}
	else {
		echo "<strong>Ihre Angaben:</strong><br />";
		$z1 = $_POST["zahl1"];
		$z2 = $_POST["zahl2"];
		//------------------------
		?>
		<hr />
		<p>Zahl1 : <em><?=$z1?></em></p>
		<p>Zahl2 : <em><?=$z2?></em></p>
		<hr />
		<p><b>Multiplikation:</b> 	<em><?=$z1 ." x ". 	$z2 ?></em> ist = <b><?=($z1*$z2)?></b></p>
		<p><b>Addition:</b> 				<em><?=$z1 ." + ". 	$z2 ?></em> ist = <b><?=($z1+$z2)?></b></p>
		<p><b>Subtraktion:</b> 			<em><?=$z1 ."	-	". 	$z2 ?></em> ist = <b><?=($z1-$z2)?></b></p>
		<p><b>Division:</b> 				<em><?=$z1 ."	/	". 	$z2 ?></em> ist = <b><?=number_format($z1/$z2, 2)?></b></p>
		<p><b>Modulo:</b> 					<em><?=$z1 ."	%	". 	$z2 ?></em> ist = <b><?=($z1%$z2)?></b></p>
		<p><b>Potenz:</b> 					<em><?=$z1 ." ** ". $z2 ?></em> ist = <b><?=($z1**$z2)?></b></p>
		<hr />
		<?php
		echo "<table><caption>Zeilen und Spalten</caption>";
		for($i=1; $i<= $z1; $i++){
			echo "<tr>";
				for($j=1; $j <= $z2; $j++)
				{
					echo "<td>$i x $j</td>";
				}#ende for
			echo "</tr>";
		}#ende for
		echo "</table>";
		}#ende else
			
	echo '</div>'; #ende ausgabe
}#ende isset
?>
<script>

document.getElementById("form1").addEventListener("reset", () => {
	let ausgabe = document.querySelector(".ausgabe");
	ausgabe.innerHTML = '';
	window.location.href = window.location.href;
});

</script>
</body>
</html>