<?php
if(isset($_POST["bt"]))
{
	//-----------------------------
	$musterName="/^[a-zäöüÄÖÜß]{3,30}$/i";
	$musterStr="/^[a-zäöüß]{2,30}\s[0-9]{1,4}$/i";
	$musterPLZ="/^[0-9]{5}$/";
	$musterOrt ="/^(oldenburg|chemnitz|stuttgart|hamburg|ulm|braunschweig)$/i";
	//-----------------------------
	if(empty($_POST["anrede"]))
	{
		echo "<p>Bitte Anrede eingeben!</p>";
	}
	elseif(!preg_match($musterName, $_POST["nn"]))
	{
		echo "<p>Bitte Name eingeben!</p>";
	}elseif(!preg_match($musterName, $_POST["vn"]))
	{
		echo "<p>Bitte Vorname eingeben!</p>";
	}
	elseif(!preg_match($musterStr, $_POST["str"]))
	{
		echo "<p>Bitte Strasse eingeben!</p>";
	}
	elseif(!preg_match($musterPLZ, $_POST["plz"]))
	{	
		echo "<p>Bitte PLZ eingeben!</p>";
	}
	elseif(!preg_match($musterOrt, $_POST["ort"]))
	{
		echo "<p>Bitte Wohnort eingeben!(oldenburg|chemnitz|stuttgart|hamburg|ulm|braunschweig)</p>";
	}
	elseif(empty($_POST["fach"]))
	{
			echo "<p>Bitte Fachgebiet eingeben!</p>";
	}
	elseif(empty($_POST["bewertung"]))
	{
			echo "<p>Wie bewerten Sie den Dozenten!</p>";
	}
	else
	{	
		//radio------------------------
		echo "<p><strong>$_POST[anrede]</strong> " . $_POST["nn"] . " " .$_POST["vn"] ."<br />";
		//-----------------------------
		echo $_POST["str"] ."<br />";
		echo $_POST["plz"] ." ". $_POST["ort"] ."</p>";
		//checkbox---------------------
		echo "<p><strong>Fachgebiet:</strong><br />";
		foreach($_POST["fach"] as $zahl=>$cb)
		{
			echo  $zahl+1 .": $cb <br />";
		}
		echo "</p>";
		//radio------------------------
		echo "<p><strong>Dozentenbewertung:</strong><br />";
				echo  $_POST["bewertung"];
		echo "</p>";
		//select-----------------------
		//bei mehrfachAuswahl mit foreach arbeiten...sonst wie radioButton ergebnis ausgeben
		echo "<p><strong>Geschenk:</strong><br />";
		foreach($_POST["geschenk"] as $gs)
		{
			echo  "$gs"." <br />";
		}
		echo "</p>";
		//-----------------------------
		?>
		<script>
		//das unten muss man nicht schreiben
		//nach 3sek wird die Seite neu geladen und dadurch verschwinden die Ausgaben
		window.setInterval('window.location.href = window.location.href;', 3000); 
		</script>
		<?php
	}#ende else

}//ende isset()
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Wert vom checkbox soll stehen bleiben
function daten($nameFeld,$valueFeld)
{
	foreach($nameFeld as $wert)
	{
		if($wert == $valueFeld)
		{
			echo "checked = 'checked'";
		}
	}//ende foreach
}//ende daten
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Wert vom select soll stehen bleiben
function datenselect($nameSelect,$wertOption)
{
	foreach($nameSelect as $wertSelect)
	{
		if($wertSelect==$wertOption)
		{
			echo "selected='selected'";
		}
	}//ende foreach
}//ende function


?>