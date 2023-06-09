<?php
//################################### 
function finanzierung()
{
	if(isset($_POST["btn"])):
		echo "<div class='fw-bold fs-5'>";
		//###############################
		$musterBuch = "/^[a-zäöüß\-\s]{2,50}$/i";
		$musterZahl = "/^[0-9]{2,5}$/";
		//###############################
		$nachname = $_POST["nachname"];
		$vorname = $_POST["vorname"];
		$anzahlung = $_POST["anzahlung"];
		$laufzeit = $_POST["laufzeit"];
		$auto = $_POST["auto"];
		//###############################
		//ist Nachname richtig?
		if(!preg_match($musterBuch,$nachname)):
			echo "<p class='text-danger'>Nachname darf NUR Buchstaben haben <br />(min. 2, max. 50)</p>";
		//ist Vorname richtig?
		elseif(!preg_match($musterBuch,$vorname)):
			echo "<p class='text-danger'>Vorname darf NUR Buchstaben haben <br />(min. 2, max. 50)</p>";
		//ist Anzahlung richtig?
		elseif(!preg_match($musterZahl,$anzahlung) || $anzahlung > 10000):
			echo "<p class='text-danger'>Anzahlung darf NUR Zahlen haben <br />(min. 2, max. 5 stellig)
							<br />Mindestens 10€ betragen<br />Nicht mehr als 10.000€</p>";
		else:
			//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
			$zuschlag = 0;
			$bgFarbe = 'light';
			if(isset($_POST["farbe"])) {
				$farbe = $_POST["farbe"];
				switch($farbe) {
					case 'rot': $zuschlag = 2000; $bgFarbe = 'danger'; break;
					case 'gruen': $zuschlag = 500; $bgFarbe = 'success'; break;
					case 'gelb': $zuschlag = 1000; $bgFarbe = 'warning'; break;
				}
			}
			
			//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
			//Preis der Autos festlegen
			switch($auto)
			{
				case "Honda": $preis=23000; break;
				case "Golf": 	$preis=18000; break;
				case "BMW": 	$preis=32000; break;
			}
			//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
			//restGeld ermitteln preis - anzahlung
			$rest = ($preis + $zuschlag)-$anzahlung;
			//Bearbeitungsgebühr auf das Restgeld
			$geb = ($rest/100)*2;
			//Monatliche Rate
			$rate = $rest/$laufzeit;
			//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
			?>
			<div class='alert alert-info'>
				<h3 class="fw-bold text-dark">Ratenfinanzierung</h3>
				<hr />
				<p><?= strtoupper($nachname." ".$vorname)?></p>
				<hr />
				<p>Marke: <?= $auto ?></p>
				<?php if(isset($farbe)):?>
					<p class="<?= $farbe ?>">Lieblingsfarbe: 
							<span class="badge bg-<?= $bgFarbe?>"><?= ucfirst($farbe) ?></span></p>
				<?php endif;?>
				<p>Anzahlung: <?= $anzahlung ?>€</p>
				<p>Laufzeit: <?= $laufzeit ?> Monate</p>
				
				<div class="alert alert-<?= $bgFarbe?>">
					<p>Preis: <?= number_format($preis,2,",",".") ?>€</p>
					<?php if(isset($farbe)):?>
						<p>Zuschlag: <?= $zuschlag ?>€</p>
					<?php endif;?>
				</div>
				
				<div class="alert alert-primary">
					<p>Restkaufpreis: <?= number_format($rest,2,",","."); ?>€</p>
					<p>Bearbeitungsgebühr(2%): <?= number_format($geb,2,",","."); ?>€</p>
					<p>Monatliche Rate: <?= number_format($rate,2,",",".") ?>€</p>
				</div>
			</div>
		<?php
		endif;#ende if
		echo '</div>';		
	endif; #ende if isset

}#ende finanzierung
##########################################################################
##########################################################################
function formSelect($feld, $wert, $checked='selected') {
	/*
	if(isset($_POST[$feld]) && $_POST[$feld] == $wert) {
		echo $checked;
	}*/
	
	#wenn so steht dann Aufruf der Funktion mit echo
	return (isset($_POST[$feld]) && $_POST[$feld] == $wert) ? $checked : '';
}

?>
