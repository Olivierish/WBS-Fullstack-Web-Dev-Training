<h2>Reguläre Ausdrücke</h2> 

<form action="index.php?page=kontakt" method="POST" class="bg-primary col-md-6 bg-opacity-10 rounded-2 p-3">
	<div class="my-1">
		<input type="text" name="vorname" 
						placeholder="Vorname eingeben" 
							class="form-control"
							value="<?= $_POST['vorname'] ?? '' ; ?>" />
	</div>
	
	<div class="my-1">
		<input type="text" name="nachname" 
						placeholder="Nachname eingeben" 
							class="form-control"
							value="<?= $_POST['nachname'] ?? '' ; ?>"  />
	</div>

  <div class="my-1">
	  <input type="text" name="mail" 
					placeholder="E-Mail eingeben" 
						class="form-control"
						value="<?= $_POST['mail'] ?? '' ; ?>"  />
  </div>
	
	<div class="my-1">
	  <input type="text" name="city" 
					placeholder="Wohnort eingeben" 
						class="form-control"
						value="<?= $_POST['city'] ?? '' ; ?>"  />
  </div>
	<div class="my-1">
	  <input type="text" name="plz" 
					placeholder="PLZ eingeben" 
						class="form-control"
						value="<?= $_POST['plz'] ?? '' ; ?>"  />
  </div>
	
	<div>
		<input type="submit" value="senden" class="btn btn-success" name="btn" />
		<input type="reset" value="löschen" class="btn btn-danger"  />
	</div>
</form>
<div class="row">
<div class="alert alert-success my-4">
<?php 
/*
\s = leerzeichen
\S = kein leerzeichen
. = beliebiges Zeichen
\d = 0-9
\D = ein Zeichen, das keine Ziffer ist
\w = [a-zA-Z_0-9]
\w = [^a-zA-Z_0-9]
#--------------------------------------
X{m,n}
X{m,}
X{n}
#--------------------------------------
X* = 0 oder öfter X{0,}
X+ = a oder öfter x{1,}
X? = 0 oder 1 mal x{0,1}

/ = Begrenzer
^ = Anfang einer Zeichenkette
[^0-9] => Negation
#--------------------------------------
i = ignore case
g = globale Suche 
#--------------------------------------
Functionen
preg_match
*/

if(isset($_POST['btn'])){
	$zeichen = "/^[a-zA-ZäöüÄÖÜß\-\s\.]{2,10}$/";
	$mail = "/^.+@.+$/";
	$ort = "/^(paris|berlin|münchen)$/i";
	$plz = "/^[0-9]{5}$/";

	if(empty($_POST['vorname'])){
		echo "<p>Vorname darf nicht leer sein</p>";
	}
	else if(!preg_match($zeichen, $_POST['vorname'])){
		echo '<p>Vorname darf NUR Buchstaben haben (2,10)</p>';
	}
	else if(!preg_match($zeichen, $_POST['nachname'])){
		echo '<p>Nachname darf NUR Buchstaben haben (2,10)</p>';
	}
	else if(!preg_match($mail, $_POST['mail'])){
		echo '<p>Muster mail : test@test.de</p>';
	}
	else if(!preg_match($ort, $_POST['city'])){
		echo '<p>Nur Berlin, Paris, München sind erlaubt</p>';
	}
	else if(!preg_match($plz, $_POST['plz'])){
		echo '<p>PLZ: Nur 5 stellige Zahl erlaubt</p>';
	}
	else{
		$vorname = $_POST['vorname'];
		$name = $_POST['nachname'];
		$email = $_POST['mail'];
		$ort = $_POST['city'];
		$postcode = $_POST['plz'];

		echo "<div>";
		echo '<p> Hallo '.$name.' '.$vorname.'</p>';
		echo '<p> Wohnort <br/> '.$postcode.' '.$ort.'</p>';
		echo '<p> E-mail <br/>'.$email.'</p>';
		echo "</div>";
	}
} #ende isset
?>
</div>
</div>