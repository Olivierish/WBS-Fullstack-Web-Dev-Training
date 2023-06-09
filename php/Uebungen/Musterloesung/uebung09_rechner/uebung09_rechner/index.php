<?php
require_once 'daten.php'; 
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>webdesign</title>
	<link  rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
</head>
<body class="bg-secondary">
<div class="container bg-light">
<header class="row">
<div class="col-12 bg-primary bg-opacity-75 text-light">
	<h1 class="display-1">WebDesign Auto-Finanzierung</h1>
	<?php
	echo '<h4 class="bg-primary bg-opacity-25 p-2">Heute ist: ' .date('d.m.Y'). '</h4>';
?>
</div>
</header>
<main class="row p-2">
<div class="col-md-6">
	<form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="bg-dark text-light p-4 fw-bold fs-5">
	<div class="p-1">
		<label for="nachname">Nachname:</label> 
		<input class="form-control" 
							type="text" name="nachname" id="nachname" value="<?= $_POST['nachname'] ?? ''; ?>" />
	</div>
	<div class="p-1">
		<label for="vorname">Vorname:</label> 
		<input class="form-control" 
							type="text" name="vorname" id="vorname" value="<?= $_POST['vorname'] ?? ''; ?>" />
	</div>
	<div class="p-1">
		<label for="auto">Automarke:</label> 
		<select name="auto" id="auto" class="form-select fw-bold fs-4 text-primary">
			<option <?= formSelect('auto', 'Honda'); ?>>Honda</option>
			<option <?= formSelect('auto', 'Golf'); ?>>Golf</option>
			<option <?= formSelect('auto', 'BMW'); ?>>BMW</option>
		</select>
		</div>
		<div class="p-1">
			<label for="anzahlung">Anzahlung:</label> 
			<input class="form-control" 
								type="text" name="anzahlung" id="anzahlung" value="<?= $_POST['anzahlung'] ?? ''; ?>" />
		</div>
		<div class="p-1">
			<label for="laufzeit">Laufzeit (Monat): </label> 
			<select id="laufzeit" name="laufzeit" class="form-select fw-bold fs-4 text-primary">
				<option <?= formSelect('laufzeit', '36'); ?>>36</option>
				<option <?= formSelect('laufzeit', '24'); ?>>24</option>
				<option <?= formSelect('laufzeit', '12'); ?>>12</option>
			</select>
		</div>
		<div class="p-1 bg-light m-1 rounded text-dark">
			<h4>Lieblingsfarbe:</h4>
			<label for="green" class="form-check-label text-success">Grün</label>
			<input class="form-check-input bg-success"
								type="radio" name="farbe" id="green" value="gruen" <?= formSelect('farbe','gruen','checked'); ?> />
			<label for="rot" class="form-check-label text-danger">Rot</label>
			<input class="form-check-input bg-danger"
								type="radio" name="farbe" id="rot" value="rot" <?= formSelect('farbe','rot','checked'); ?> />
			<label for="gelb" class="form-check-label text-warning">Gelb</label>
			<input class="form-check-input bg-warning"
								type="radio" name="farbe" id="gelb" value="gelb" <?= formSelect('farbe','gelb','checked'); ?> />
		</div>
		<input type="submit" name="btn" value="bestellen" class="btn btn-primary w-100 py-4 fs-2 fw-bold" />
	</form>
</div>
<div class="col-md-6">
<?php
	finanzierung();
?>
</div>
</main>

</div>
</body>
</html>